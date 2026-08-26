<?php
defined('SYSPATH') or die('No Direct Script Access');
/******************************************

 * Contains Transaction model details

 * @Package: ConnectTaxi

 * @Author: NDOT Team

 * @URL : http://www.ndot.in

 ********************************************/
class Model_CorporateGroup extends Model
{
    /**
     ****__construct()**
     *** Common Function in this model
     */
    public function __construct()
    {
        //** Session variables initialization goes here **//
        $this->session         = Session::instance();
        $this->username        = $this->session->get("username");
        $this->admin_username  = $this->session->get("username");
        $this->admin_userid    = $this->session->get("id");
        $this->admin_email     = $this->session->get("email");
        $this->user_admin_type = $this->session->get("user_type");
        $this->userid          = $this->session->get('userid');
        $this->country_id      = $this->session->get('country_id');
        $this->state_id        = $this->session->get('state_id');
        $this->city_id         = $this->session->get('city_id');
        $this->currentdate     = Commonfunction::getCurrentTimeStamp();
        //MongoDB Instance
        $this->mongo_db        = MangoDB::instance('default');
        $this->common_model      = Model::factory('commonmodel');
    }


    public function validate_add_corporate_group($arr)
    {
        $validate = Validation::factory($arr)
            ->rule('corporate_group_name', 'not_empty')
            ->rule('wallet_positive_limit', 'not_empty')
            ->rule('wallet_max_limit_check', 'not_empty')
            ->rule('surge_pricing', 'not_empty')
            ->rule('corporate_group_name', 'Model_CorporateGroup::checkCorporateGroupNameExists', [':value', $arr['corporate_group_name']]);
        return $validate;
    }

    public function add_corporate_group($post)
    {
        //echo"<pre>"; print_r($post);exit();
        $user_createdby = $this->admin_userid;
        $rs = $this->mongo_db->find(MDB_CORPORATE_GROUP, [], ['_id'])->sort(['_id' => -1])->limit(1);
        $rs = iterator_to_array($rs);
        reset($rs);
        $rs_first_key = key($rs);
        $inc_id = $rs_first_key + 1;

        $param = [
            '_id' => $inc_id,
            'corporate_group_name' => $post['corporate_group_name'],
            'wallet_positive_limit' => (int)$post['wallet_positive_limit'],
            'surge_pricing' => (int)$post['surge_pricing'],
            'wallet_max_limit_check' => (int)$post['wallet_max_limit_check'],
            "corporate_passengers_list" => $post['corporate_passengers_list'],
            'status' => 'A',
            'created_by' => $user_createdby
        ];
        $result = $this->mongo_db->insert(MDB_CORPORATE_GROUP, $param);
        return $result;
    }

    // public function corporate_group_detail($id)
    // {
    //     $query = $this->mongo_db->find(MDB_CORPORATE_GROUP,array('_id' => (int)$id));
    //     $result = iterator_to_array($query);
    //     $finrest = array_shift($result);
    //     return $finrest;
    // }

    public static function checkCorporateGroupNameExists($corporate_group_name = "", $zone_id)
    {
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_CORPORATE_GROUP, ['corporate_group_name' => $corporate_group_name]);
        return ($result > 0) ? false : true;
    }

    public static function checkEditCorporateGroupNameExists($corporate_group_name = "", $id)
    {
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_CORPORATE_GROUP, ['corporate_group_name' => $corporate_group_name, '_id' => (int)$id]);
        return ($result > 0) ? false : true;
    }

    public function corporate_group_detail($id)
    {
        $arguments = [
            [
                '$match' => ['_id' => (int)$id]
            ],
            [
                '$project' => [
                    '_id' => '$_id',
                    'corporate_group_name' => '$corporate_group_name',
                    'wallet_positive_limit' => '$wallet_positive_limit',
                    'wallet_max_limit_check' => '$wallet_max_limit_check',
                    'surge_pricing' => '$surge_pricing',
                    'corporate_passengers_list' => '$corporate_passengers_list',
                    'status' => '$status'
                ]
            ]
        ];

        $res = $this->mongo_db->aggregate(MDB_CORPORATE_GROUP, $arguments);
        return isset($res['result'][0]) ? $res['result'][0] : [];
    }

    public function passengers_list($keyword, $selected = [])
    {
        if (count($selected) > 0) {
            $srch_query = [
                "\$and" => [
                    ['user_status' => 'A'],
                    ["\$or" => [
                        ['name' => new \MongoDB\BSON\Regex($keyword, 'i')],
                        ['email' => new \MongoDB\BSON\Regex($keyword, 'i')],
                        ['phone' => new \MongoDB\BSON\Regex($keyword, 'i')],

                    ]],
                    ["\$or" => [
                        ['_id' => ['$in' => $selected]]
                    ]]
                ]
            ];
        } else {
            $srch_query = [
                "\$and" => [
                    ['user_status' => 'A'],
                    ["\$or" => [
                        ['name' => new \MongoDB\BSON\Regex($keyword, 'i')],
                        ['email' => new \MongoDB\BSON\Regex($keyword, 'i')],
                        ['phone' => new \MongoDB\BSON\Regex($keyword, 'i')],

                    ]]
                ]
            ];
        }

        $arguments = [
            [
                '$match' => $srch_query,
            ],
            [
                '$project' => [
                    'id' => '$_id',
                    'text' => ['$concat' => ['$name', ' - ', '$email', ' - ', '$phone']]
                ]
            ],
            [
                '$limit' => 20
            ]
        ];

        $res = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
        return isset($res['result']) ? $res['result'] : [];
    }


    public function validate_edit_corporate_group($arr, $id)
    {
        $validate = Validation::factory($arr)
            ->rule('corporate_group_name', 'not_empty')
            ->rule('wallet_positive_limit', 'not_empty')
            ->rule('wallet_max_limit_check', 'not_empty')
            ->rule('surge_pricing', 'not_empty')
            ->rule('corporate_group_name', 'Model_CorporateGroup::checkEditCorporateGroupNameExists', [':value', $arr['corporate_group_name']]);

        return $validate;
    }
    public function edit_corporate_group($postvalues, $id)
    {
        $user_createdby = $_SESSION['userid'];
        $param = [
            'corporate_group_name' => $postvalues['corporate_group_name'],
            'wallet_positive_limit' => (int)$postvalues['wallet_positive_limit'],
            'surge_pricing' => (int)$postvalues['surge_pricing'],
            'wallet_max_limit_check' => (int)$postvalues['wallet_max_limit_check'],
            'corporate_passengers_list' => $postvalues['corporate_passengers_list'],
            'created_by' => $user_createdby
        ];
        $result = $this->mongo_db->update(MDB_CORPORATE_GROUP, ['_id' => (int)$id], ['$set' => $param], ['upsert' => false]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }

    public function manage_corporate_group_search($keyword = "", $status = "", $offset = "", $val = "", $find_count = false)
    {
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $srch_query = [];
        //MongoDB with aggregate process only
        if ((!empty($keyword)) && (!empty($status))) {
            $srch_query = ["\$and" => [['status' => $status], ["\$or" => [['corporate_group_name' => new \MongoDB\BSON\Regex($keyword, 'i')]]]]];
        } else if (!empty($status)) {
            $srch_query = ["\$and" => [['status' => $status]]];
        } else {
            $srch_query = ["\$and" => [['status' => 'A']]];
        }

        //echo '<pre>'; print_r($srch_query); exit();
        if (!empty($srch_query)) {
            $arguments = [
                [
                    '$match' => $srch_query
                ],
                [
                    '$project' => [
                        '_id' => '$_id',
                        'corporate_group_name' => '$corporate_group_name',
                        'wallet_positive_limit' => '$wallet_positive_limit',
                        'wallet_max_limit_check' => '$wallet_max_limit_check',
                        'surge_pricing' => '$surge_pricing',
                        'status' => '$status'
                    ]
                ]
            ];
        } else {
            $arguments = [
                [
                    '$match' => $srch_query
                ],
                [
                    '$project' => [
                        '_id' => '$_id',
                        'corporate_group_name' => '$corporate_group_name',
                        'wallet_positive_limit' => '$wallet_positive_limit',
                        'wallet_max_limit_check' => '$wallet_max_limit_check',
                        'surge_pricing' => '$surge_pricing',
                        'status' => '$status'
                    ]
                ]
            ];
        }

        if ($find_count == false) {

            $arguments[]['$skip'] = (int)$offset;
            $arguments[]['$limit'] = (int)$val;
        }
        $res = $this->mongo_db->aggregate(MDB_CORPORATE_GROUP, $arguments);
        $result = [];
        if (!empty($res['result'])) {
            foreach ($res['result'] as $r) {
                $temp_arr['_id'] = $r['_id'];
                $temp_arr['corporate_group_name'] = $r['corporate_group_name'];
                $temp_arr['wallet_positive_limit'] = $r['wallet_positive_limit'];
                $temp_arr['surge_pricing'] = $r['surge_pricing'];
                $temp_arr['wallet_max_limit_check'] = $r['wallet_max_limit_check'];
                $temp_arr['status'] = isset($r['status']) ? $r['status'] : "";
                $result[] = $temp_arr;
            }
        }
        //echo '<pre>'; print_r($result); exit();
        return $result;
    }

    public function block_corporate_group_request($activeids)
    {
        $active_ids = Commonfunction::mongo_format_array($activeids);
        //print_r($active_ids); exit();
        $result = $this->mongo_db->update(MDB_CORPORATE_GROUP, ['_id' => ['$in' => $active_ids]], ['$set' => ['status' => 'D']], ['multiple' => true]);
        return (empty($res['err'])) ? 1 : $res['errmsg'];
    }

    public function active_corporate_group_request($activeids)
    {
        $active_ids = Commonfunction::mongo_format_array($activeids);
        //print_r($active_ids); exit();
        $result = $this->mongo_db->update(MDB_CORPORATE_GROUP, ['_id' => ['$in' => $active_ids]], ['$set' => ['status' => 'A']], ['multiple' => true]);
        return (empty($res['err'])) ? 1 : $res['errmsg'];
    }

    public function trash_corporate_group_request($activeids)
    {
        $active_ids = Commonfunction::mongo_format_array($activeids);
        //print_r($active_ids); exit();
        $result = $this->mongo_db->update(MDB_CORPORATE_GROUP, ['_id' => ['$in' => $active_ids]], ['$set' => ['status' => 'T']], ['multiple' => true]);
        return (empty($res['err'])) ? 1 : $res['errmsg'];
    }

    // public function all_model_details()
    // {
    //     $company_id = 0;        
    //     if (FARE_SETTINGS == 2 && $company_id != 0) //company_id = 0 as Admin
    // 	{
    //        $arguments = array(
    // 						array('$lookup' => array(
    // 							'from' => MDB_COMPANY,
    // 							'localField' => '_id',
    // 							'foreignField' => 'model_fare.model_id',					
    // 							'as'=> "cdetails"
    // 						)),
    // 						array('$unwind'=>'$cdetails'),
    // 						array('$match'=>array('cdetails._id'=>(int)$company_id)),
    // 						array('$project'=>array('_id'=>'$_id','model_name'=>'$model_name'))
    // 					);
    //         $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
    //         $res = $result['result'];
    //         return (isset($res)?$res:array());
    //     } else {          
    //         $result = $this->mongo_db->find(MDB_MOTOR_MODEL,array('model_status'=>'A'))->sort(array('_id'=>1));
    //         $res = iterator_to_array($result);
    //         return (isset($res)?$res:array());
    //     }
    // }
}
