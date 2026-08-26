<?php
defined('SYSPATH') or die('No direct script access.');
/**
 * Authorization model for admin 
 * @license    http://ndot.in/license
 */
class Model_Authorize extends Model
{
    public function __construct()
    {
        $this->session  = Session::instance();
        $this->userid   = $this->session->get("userid");
        $this->mdate    = commonfunction::getCurrentTimeStamp();
        //MongoDB Instance
        $this->mongo_db = MangoDB::instance('default');
    }
    public function login_validate($arr)
    {
        return Validation::factory($arr)
        ->rule('email', 'not_empty', [  ':value', 'Email' ])
        ->rule('email', 'email', [':value','Email' ])
        ->rule('password', 'not_empty', [':value','Password']);
    }
    public function adminlogin_details($email, $password, $need_count = FALSE, $status = ACTIVE)
    {
        /*$query = DB::select()->from(PEOPLE)->where('email', '=', $email)->and_where('password', '=', $password)->where_open()->where('user_type', '=', 'A')->or_where('user_type', '=', 'S')->where_close()->and_where('status', '=', ACTIVE)->limit(1)->execute()->as_array();
        if ($need_count) {
            $result = count($query);
        } else {
            $result = $query;
        }
        return $result;*/
        
        //MongoDB
        $condition = ['email'=>$email,'password'=>$password,'status'=>ACTIVE,"\$or"=>[['user_type'=>'A'],['user_type'=>'S']]];
        if($need_count){
            $result = $this->mongo_db->count(MDB_PEOPLE,$condition);
            return $result;
        } else {
            $result = $this->mongo_db->find_one(MDB_PEOPLE,$condition,['user_type','name','username','email','company_id','login_city','login_state','login_country']);
            return (!empty($result))?$result:[];
        }
    }
    public function companylogin_details($email, $password, $need_count = FALSE, $status = ACTIVE)
    {
        /*$query = DB::select('*', PEOPLE . '.id')->from(PEOPLE)->JOIN(COMPANY)->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->JOIN(COMPANYINFO)->on(PEOPLE . '.company_id', '=', COMPANYINFO . '.company_cid')->JOIN(PACKAGE_REPORT)->on(PEOPLE . '.company_id', '=', PACKAGE_REPORT . '.upgrade_companyid')->where('email', '=', $email)->where('password', '=', $password)->where('user_type', '=', 'C')->where('company_domain', '=', SUBDOMAIN)->order_by(PACKAGE_REPORT . '.upgrade_id', 'desc')->limit(1)->execute()->as_array();
        //print_r($query);
        if ($need_count) {
            $result = count($query);
        } else {
            $result = $query;
        }
        return $result;*/
        
        //MongoDB
        $match_query = ['email'=>$email,'password'=>$password,'status'=>ACTIVE,'user_type'=>'C','company.companyinfo.company_domain'=>SUBDOMAIN];
        $common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => PACKAGE_REPORT,
					'localField' => 'company_id',
					'foreignField' => 'upgrade_companyid',
					'as' => 'package_report'
				]
			],
			[
				'$unwind' => '$package_report'
			],
			[
				'$match' => $match_query
			]
		];
        if($need_count){
            $count_arguments = [
                [
					'$sort' => [ 
						'package_report._id' => -1
					],
				],
               ['$limit'	=> 1 ],
                [
                    '$group' => [
                        '_id' => NULL,
                        'count' => [
                            '$sum' => 1
                        ]
                    ]
                ]
            ];
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
			//echo "<pre>if";print_r($merge_arguments);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
            $count_arguments = [
                [
					'$sort' => [ 
						'package_report._id' => -1
					],
				],
                ['$limit'	=> 1 ],
                [
                    '$project' => ['_id'=>0,
                        'id' => '$_id',
                        'user_type' => '$user_type',
                        'name' => '$name',
                        'username' => '$username',
                        'email' => '$email',
                        'company_id' => '$company_id',
                        'login_city' => '$login_city',
                        'login_state' => '$login_state',
                        'login_country' => '$login_country',
                        'company_status' => '$company.companydetails.company_status',
                        'upgrade_packageid' => '$package_report.upgrade_packageid',
                        'upgrade_expirydate' => '$package_report.upgrade_expirydate',
                    ]
                ]
            ];
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
            //echo "<pre>else";print_r($result['result']);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    public function managerlogin_details($email, $password, $need_count = FALSE, $status = ACTIVE)
    {
        /*$query = DB::select()->from(PEOPLE)->JOIN(COMPANY)->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('email', '=', $email)->where('password', '=', $password)->where('user_type', '=', 'M')->limit(1)->execute()->as_array();
        if ($need_count) {
            $result = count($query);
        } else {
            $result = $query;
        }
        return $result;*/
		
		//MongoDB
        $match_query = ['email'=>$email,'password'=>$password,'status'=>ACTIVE,'user_type'=>'M'];
        $common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$match' => $match_query
			]
		];
        if($need_count){
            $count_arguments = [
                [
                    '$group' => [
                        '_id' => NULL,
                        'count' => [
                            '$sum' => 1
                        ]
                    ]
                ]
            ];
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
			//echo "<pre>if";print_r($result);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
            $count_arguments = [
                [
                    '$project' => ['_id'=>0,
                        'id' => '$_id',
                        'user_type' => '$user_type',
                        'name' => '$name',
                        'username' => '$username',
                        'email' => '$email',
                        'company_id' => '$company_id',
                        'login_city' => '$login_city',
                        'login_state' => '$login_state',
                        'login_country' => '$login_country',
                        'company_status' => '$company.companydetails.company_status',
                    ]
                ]
            ];
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
            //echo "<pre>else";print_r($result['result']);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    public function login_details($email, $password, $need_count = FALSE, $status = ACTIVE)
    {
        $query = DB::select()->from(PEOPLE)->where('email', '=', $email)->and_where('password', '=', $password)->and_where('user_type', '=', ACTIVE)->limit(1)->execute()->as_array();
        if ($need_count) {
            $result = count($query);
        } else {
            $result = $query;
        }
        return $result;
    }
    public static function forgotpassword_emailcheck($email)
    {
        //MongoDB
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_PEOPLE,['email'=>$email,'user_type'=>ADMIN]);
        return ($result>0)?TRUE:FALSE;
    }
    public static function forgotpassword_emailcompanycheck($email)
    {
        //MongoDB
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_PEOPLE,['email'=>$email,'user_type'=>'C']);
        return ($result>0)?TRUE:FALSE;
    }
    public static function forgotpassword_emailmanagercheck($email)
    {
        //MongoDB
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_PEOPLE,['email'=>$email,'user_type'=>'M']);
        return ($result>0)?TRUE:FALSE;
    }
    public function forgotpassword_validate($arr)
    {
        $validate = Validation::factory($arr)->rule('email', 'not_empty', [
            ':value',
            'Email'
        ])->rule('email', 'email_domain', [
            ':value',
            'Email'
        ])->rule('email', 'Model_Authorize::forgotpassword_emailcheck', [
            ':value',
            'Email'
        ]);
        return $validate;
    }
    public function forgotpassword_companyvalidate($arr)
    {
        $validate = Validation::factory($arr)->rule('email', 'not_empty', [
            ':value',
            'Email'
        ])->rule('email', 'email_domain', [
            ':value',
            'Email'
        ])->rule('email', 'Model_Authorize::forgotpassword_emailcompanycheck', [
            ':value',
            'Email'
        ]);
        return $validate;
    }
    public function forgotpassword_managervalidate($arr)
    {
        $validate = Validation::factory($arr)->rule('email', 'not_empty', [
            ':value',
            'Email'
        ])->rule('email', 'email_domain', [
            ':value',
            'Email'
        ])->rule('email', 'Model_Authorize::forgotpassword_emailmanagercheck', [
            ':value',
            'Email'
        ]);
        return $validate;
    }
    public static function check_password($password, $userid)
    {
        $result = count(DB::select('password')->from(PEOPLE)->where('password', '=', md5($password))->and_where('id', '=', $userid)->execute()->as_array());
        return $result > 0 ? TRUE : FALSE;
    }
    public function editprofile_validate($arr, $uid)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
            //->rule('firstname', 'alpha_dash')
            ->rule('firstname', 'min_length', [
            ':value',
            '3'
        ])->rule('firstname', 'max_length', [
            ':value',
            '30'
        ])->rule('lastname', 'not_empty')
        //->rule('lastname', 'alpha_dash')            
        //->rule('lastname', 'min_length', array(':value', '4'))            
        //->rule('lastname', 'max_length', array(':value', '30'))
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->rule('email', 'max_length', [
            ':value',
            '100'
        ])->rule('email', 'Model_Edit::checkemail', [
            ':value',
            $uid
        ])->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')
            ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', [
            ':value'
        ])->rule('phone', 'Model_Edit::checkphone', [
            ':value',
            $uid
        ])->rule('address', 'not_empty');
        //->rule('country', 'not_empty')
        //->rule('state', 'not_empty')
        //->rule('city', 'not_empty');
    }
    /** for passengers list **/
    public function editpassenger_validate($arr, $uid)
    {
        return Validation::factory($arr)
        ->rule('name', 'not_empty')
        ->rule('name', 'alpha_dash')
        ->rule('name', 'min_length', [
            ':value',
            '3'
        ])->rule('name', 'max_length', [
            ':value',
            '30'
        ])->rule('email', 'not_empty')
        ->rule('email', 'email')
        ->rule('email', 'max_length', [
            ':value',
            '100'
        ])->rule('email', 'Model_Edit::check_passengeremail', [
            ':value',
            $uid
        ])->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')            
        //->rule('phone','Model_Add::check_valid_phone_number',array(':value','/^[0-9()-+]*$/u'))
        ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])->rule('phone', 'phone', [
            ':value'
        ])->rule('pay_by', 'not_empty');
    }
    public function changepassword_validate($arr, $id)
    {
        return Validation::factory($arr)
        ->rule('oldpassword', 'not_empty')
        ->rule('oldpassword', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('oldpassword', 'max_length', [
            ':value',
            '16'
        ])->rule('oldpassword', 'Model_Authorize::check_pass', [
            ':value',
            $id
        ])->rule('password', 'not_empty')->rule('password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('password', 'max_length', [
            ':value',
            '16'
        ])->rule('repassword', 'not_empty')->rule('repassword', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('repassword', 'matches', [
            ':validation',
            'password',
            'repassword'
        ])->rule('repassword', 'max_length', [
            ':value',
            '16'
        ]);
    }
    public function changepassword($password, $userid)
    {
        $org_password = $password;
        $password     = md5($password);
        $set_array = [
            "password" => $password,
            "org_password" => $org_password
        ];
        //MongoDB
        $result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$userid],['$set'=>$set_array],['upsert'=>true]);
        return (empty($result['err']))?1:0;
    }
    public function select_users_exists($email, $status = ADMIN)
    {
        $query = DB::select()->from(PEOPLE)->where('email', '=', $email)
        //->and_where('user_type','=',$status)
            ->execute()->as_array();
        if (count($query) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function select_users_byemail($email)
    {
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PEOPLE,['email'=>$email],['_id','name','email']);
        //echo '<pre>';print_r($result);exit;
        return (!empty($result)) ? $result : [];
    }
    public function select_user_details_by_idall($userid)
    {
        $query = DB::select()->from(PEOPLE)->where('id', '=', $userid)->limit(1)->execute()->as_array();
        return $query;
    }
    public function count_all_user($type = "")
    {
        $query = DB::select()->from(PEOPLE);
        if ($type != "") {
            $result = $query->where('user_type', '=', $type)->execute()->as_array();
        } else {
            $result = $query->execute()->as_array();
        }
        return count($result);
    }
    // Check Image Exist or Not while Updating Job Details
    public function check_userphoto($userid = "")
    {
        $sql    = "SELECT photo FROM " . PEOPLE . " WHERE id ='$userid'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['photo'];
        }
    }
    public function edit_people($uid, $post)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'name' => $post['firstname'],
            'address' => $post['address'],
            'login_country' => $post['country'],
            'login_state' => $post['state'],
            'login_city' => $post['city'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone']
        ))->where('id', '=', $uid)->execute();
        return ($result) ? 1 : 0;*/
        
        //MongoDB
        $post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
        $data_set = [
            'name' => $post['firstname'],
            'address' => $post['address'],
            'login_country' => (int)$post['country'],
            'login_state' => (int)$post['state'],
            'login_city' => (int)$post['city'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone']
        ];
		
        $result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$data_set],['upsert'=>true]);
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    /** edit passengers details**/
    public function edit_passenger($uid, $post)
    {		
        $country_code = '';
        $phone        = $post['phone'];
        if (strpos($post['phone'], '-') !== false) {
            $phoneArr     = explode('-', $post['phone']);
            $country_code = $phoneArr[0];
            $phone        = $phoneArr[1];
        }
        
		$startdate = Commonfunction::getCurrentDate();
		
		if($post['pay_by'] == 1) {
			$enddate = date( "Y-m-d", strtotime( "$startdate +7 day" ) );			
		} else if($post['pay_by'] == 2) {			
			$enddate = date( "Y-m-d", strtotime( "$startdate +30 day" ) );
		}
		if($post['pay_by'] != 3) {
			$data = [
				'name' => $post['name'],
				//'address' => $post['address'],
				'email' => $post['email'],
				'country_code' => $country_code,
				'phone' => $phone,
				//'discount' => (int)$post['discount'],
                'pay_by' => (int)$post['pay_by'],
				'vip_user' => (int)$post['vip_user'],
				'lateral_start_date' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
				'lateral_end_date' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000),
                'trip_amt_limit' =>$post['trip_amt_limit'],
                'notes' =>$post['notes']
			];	
		} else {
			$data = [
				'name' => $post['name'],
				//'address' => $post['address'],
				'email' => $post['email'],
				'country_code' => $country_code,
				'phone' => $phone,
				//'discount' => (int)$post['discount'],
				'pay_by' => (int)$post['pay_by'],
                'vip_user' => (int)$post['vip_user'],
                'notes' =>isset($post['notes'])?$post['notes']:''
			];
		}
        
        $result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$uid],['$set'=>$data],['upsert'=>true]);
        //print_r($result);exit;
        return (empty($result['err']))?1:$result['errmsg'];
    }
	
	public function getPayBy() {
	   $result = $this->mongo_db->find(MDB_PAY_BY,['status'=>'A'],['_id','type','days']);
	   return (!empty($result)) ? iterator_to_array($result) : [];       
	}
    //update user photo null 
    public function update_user_photo($userid)
    {
        $sql_query = [
            'photo' => ""
        ];
        $result    = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $userid)->execute();
        return 1;
    }
    public function fb_login_details($access_key)
    {
        $query = DB::select()->from(PEOPLE)->where('access_key', '=', $access_key)->execute()->as_array();
        return $query;
    }
    public function login_details_byid($userid)
    {
        /*$query = DB::select()->from(PEOPLE)->where('id', '=', $userid)->limit(1)->execute()->as_array();
        return $query;*/
        
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$userid],['_id','name','lastname','email','address','login_country','login_state','login_city','status','phone']);
       //print_r($result);exit;
        return (!empty($result)) ? $result : [];
    }
    /** get passenger id */
    public function login_details_by_passengerid($userid)
    {
        /*$query = DB::select()->from(PASSENGERS)->where('id', '=', $userid)->limit(1)->execute()->as_array();
        return $query;*/
        
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>(int)$userid],['_id','name','lastname','email','address','phone','discount','pay_by','trip_amt_limit','vip_user','notes']);
        return (!empty($result)) ? $result : [];
    }
    public function select_user_details_by_id($userid)
    {
       /* $query = DB::select()->from(PEOPLE)->where('id', '=', $userid)->and_where('status', '=', ACTIVE)->limit(1)->execute()->as_array();
        return $query;*/
       
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$userid,'status'=>ACTIVE],['_id','user_type','email','name']);
        //echo '<pre>';print_r($result);exit;
        return (!empty($result)) ? $result : [];
    }
    public function select_alluser_details($id)
    {
        /*$query = DB::select()->from(PEOPLE)->where('id', '!=', $id)->execute()->as_array();
        return $query;*/
    
        //MongoDB
        $result = $this->mongo_db->find(MDB_PEOPLE,['_id'=>['$ne'=>(int)$id]]);
        //echo '<pre>';print_r($result);exit;
        return (!empty($result)) ? iterator_to_array($result) : [];
    }
    /**
     * Check inline textbox label not empty for javscript on focus and on blur
     **/
    public static function check_label_not_empty($fieldname, $value)
    {
        return ($fieldname == $value) ? FALSE : TRUE;
    }
    public static function unique_email($email)
    {
        return !DB::select([
            DB::expr('COUNT(email)'),
            'total'
        ])->from(PEOPLE)->where('email', '=', $email)->execute()->get('total');
    }
    public function user_list()
    {
		// MongoDB
		$result = $this->mongo_db->find(MDB_PEOPLE,['user_type'=>['$ne'=>'N'],'user_type'=>['$ne'=>'A'],'status'=>['$ne'=>'T']])->sort(['created_date'=>-1]);
		return (!empty($result))?iterator_to_array($result):[];
    }
    public function all_user_list($offset = '', $val = '',$find_count = false)
    {
		/*if($find_count){
			 $result = DB::select('id')->from(PEOPLE)->where('user_type', '!=', 'A')->where('status', '!=', 'T')->order_by('created_date', 'desc')->execute()->as_array();
			return count($result);
		 } else {
			$result = DB::select()->from(PEOPLE)->where('user_type', '!=', 'A')->where('status', '!=', 'T')->order_by('created_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
			return $result;
        }*/
		
		// MongoDB
		if($find_count){
			$result = $this->mongo_db->count(MDB_PEOPLE,['user_type'=>['$ne'=>'A'],'status'=>['$ne'=>'T']]);
			return $result;
		} else {
			$result = $this->mongo_db->find(MDB_PEOPLE,['user_type'=>['$ne'=>'A'],'status'=>['$ne'=>'T']],['_id','name','lastname','email','phone','address','created_date','user_type','status'])->sort(['created_date'=>-1])->skip($offset)->limit($val);
			return (!empty($result))?iterator_to_array($result):[];
		}
    }
    public function validate_user_form($arr)
    {
        $arr['name']  = trim($arr['name']);
        $arr['email'] = trim($arr['email']);
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'min_length', [
            ':value',
            '5'
        ])->rule('name', 'min_length', [
            ':value',
            '32'
        ])->rule('password', 'not_empty')->rule('password', 'min_length', [
            ':value',
            '5'
        ])->rule('file', 'Upload::type', [
            $files_value_array['photo'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('file', 'Upload::size', [
            $files_value_array['photo'],
            '2M'
        ])->rule('email', 'not_empty')->rule('email', 'email')->rule('country_id', 'not_empty')->rule('paypal_account', 'email')->rule('username', 'not_empty')->rule('username', 'min_length', [
            ':value',
            '4'
        ])->rule('username', 'max_length', [
            ':value',
            '30'
        ]);
    }
    public function add_users($validator, $post_value_array, $image_name, $activation_key)
    {
        $randomkey = Commonfunction::admin_random_user_password_generator();
        $email     = $post_value_array['email'];
        $status    = isset($post_value_array['status']) ? "A" : "I";
        $rs        = DB::insert(USERS)->columns([
            'firstname',
            'lastname',
            'email',
            'username',
            'paypal_account',
            'photo',
            'status',
            'password',
            'activation_code',
            'created_date',
            'country_id'
        ])->values([
            $post_value_array['firstname'],
            $post_value_array['lastname'],
            $post_value_array['email'],
            $post_value_array['username'],
            $post_value_array['paypal_account'],
            $image_name,
            $status,
            md5($activation_key),
            $randomkey,
            $this->mdate,
            $post_value_array['country_id']
        ])->execute();
        if ($rs) {
            $email = DB::select()->from(USERS)->where('email', '=', $email)->execute()->as_array();
            return $email;
        } else {
            if (count($email) == 0) {
                return 2;
            }
            return 0;
        }
    }
    //Check Whether Email is Already Exist or Not
    public function check_email($email = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // To Check User Name is Already Available or Not
    public static function unique_username($name)
    {
        // Check if the username already exists in the database
        $sql    = "SELECT name FROM " . PEOPLE . " WHERE name='$name'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Check Whether the Eneterd Password is Correct While User Change Password
    public static function check_pass($pass = "", $userid = "")
    {
        //MongoDB
        $mongodb = MangoDB::instance('default');
        $pass     = md5($pass);
        $condition = ['_id'=>(int)$userid];
        $result = $mongodb->find_one(MDB_PEOPLE,$condition,['password']);
        $password = $result["password"];
        return ($password == $pass)?true:false;
    }
    public function check_account_exist($userid)
    {
        $result = DB::select()->from(SOCIAL_MEDIA_ACCOUNTS)->where("user_id", "=", $userid)->where("fb_user_id", "!=", '')->or_where("twitter_user_id", "!=", '')->or_where("linkedin_user_id", "!=", '')->execute()->as_array();
        return $result;
    }
    //check detail exist in database	
    public static function check_id_exist($id, $ppl_fav_id)
    {
        // Check if the username already exists in the database
        $sql    = "SELECT * FROM " . PEOPLE_FAVORITES . " WHERE id='$id' AND people_favorites_id='$ppl_fav_id' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function delete_people($current_uri)
    {
        //get username and email for sending mail to users
        $rs = DB::delete(PEOPLE)->where('id', '=', $current_uri)->execute();
        return $rs;
    }
    public function check_people_exist($id)
    {
        $id = DB::select()->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
        return count($id);
    }
    public function activate_deactivate_people($chguserid, $status)
    {
        if ($status == 'A') {
            $update_status = 'I';
        } else if ($status == 'I') {
            $update_status = 'A';
        }
        $rs = DB::update(PEOPLE)->set([
            "status" => $update_status
        ])->where('id', '=', $chguserid)->execute();
        if ($rs)
            $update = 1;
        else
            $update = 0;
        return $update;
    }
    /** passenger delete function**/
    public function delete_passenger($current_uri)
    {
        $rs = DB::delete(PASSENGERS)->where('id', '=', $current_uri)->execute();
        return $rs;
    }
    /** passenger activate and deactivate **/
    public function activate_deactivate_passenger($chguserid, $status)
    {
        if ($status == 'A') {
            $update_status = 'I';
        } else if ($status == 'I') {
            $update_status = 'A';
        }
        $rs = DB::update(PASSENGERS)->set([
            "user_status" => $update_status
        ])->where('id', '=', $chguserid)->execute();
        if ($rs)
            $update = 1;
        else
            $update = 0;
        return $update;
    }
    public function all_user_list_history($offset, $val)
    {
        $query  = "select * from " . PEOPLE . " where   user_type!='A' and status='D'  order by created_date desc limit $offset,$val";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function count_user_list_history()
    {
        $rs = DB::select()->from(PEOPLE)->where('status', '=', 'D')->execute()->as_array();
        return count($rs);
    }
    /** passenger list **/
    public function all_passenger_list_history($offset, $val, $find_count = FALSE)
    {
		$match_query = ['user_type'=>'O', 'status' => "A" ];
        if ($find_count == TRUE) {
            $arguments = [
               /* array(
                    '$unwind' => '$passengerdetails'
                ),*/
                [
                    '$project' => [
                        'pid' => '$_id'
                    ]
                ],
                [
                    '$group' => [
                        '_id' => NULL,
                        'count' => [
                            '$sum' => 1
                        ]
                    ]
                ]
            ];
            $result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
            //echo "<pre>"; print_r($result['result'][0]['count']); exit;
            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
            /*$query = "select * from ". PASSENGERS . " where 1=1  order by created_date desc limit $offset,$val";
            $result = Db::query(Database::SELECT, $query)
            ->execute()
            ->as_array();
            return $result;*/
            $arguments = [
               /* array(
                    '$unwind' => '$passengerdetails'
                ),*/
                [
				'$match' => $match_query
				],
                [
                    '$project' => [
                        'pid' => '$_id'
                    ]
                ],
                [
                    '$sort' => [
                        'created_date' => -1
                    ]
                ],
                [
                    '$skip' => (int) $offset
                ],
                [
                    '$limit' => (int) $val
                ]
            ];
            $result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
            //echo "<pre>"; print_r($result['result']); exit;
            return (!empty($result['result'])) ? $result['result'] : 0;
        }
    }
    
    /* CORPORATE PORTAL */
     public function corporatelogin_details($email, $password, $need_count = FALSE, $status = ACTIVE)
    {
        /*$query = DB::select()->from(PEOPLE)->JOIN(COMPANY)->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('email', '=', $email)->where('password', '=', $password)->where('user_type', '=', 'M')->limit(1)->execute()->as_array();
        if ($need_count) {
            $result = count($query);
        } else {
            $result = $query;
        }
        return $result;*/
		
		//MongoDB
        $match_query = ['email'=>$email,'password'=>$password,'status'=>ACTIVE,'user_type'=>'O'];
        $common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$match' => $match_query
			]
		];
        if($need_count){
            $count_arguments = [
                [
                    '$group' => [
                        '_id' => NULL,
                        'count' => [
                            '$sum' => 1
                        ]
                    ]
                ]
            ];
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
			//echo "<pre>if";print_r($result);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
            $count_arguments = [
                [
                    '$project' => ['_id'=>0,
                        'id' => '$_id',
                        'user_type' => '$user_type',
                        'name' => '$name',
                        'lastname' => '$lastname',
                        'username' => '$username',
                        'email' => '$email',
                        'company_id' => '$company_id',
                        'login_city' => '$login_city',
                        'login_state' => '$login_state',
                        'login_country' => '$login_country',
                        'company_status' => '$company.companydetails.company_status',
                    ]
                ]
            ];
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
            //echo "<pre>else";print_r($result['result']);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    
     public function forgotpassword_corporatevalidate($arr)
    {
        $validate = Validation::factory($arr)->rule('email', 'not_empty', [
            ':value',
            'Email'
        ])->rule('email', 'email_domain', [
            ':value',
            'Email'
        ])->rule('email', 'Model_Authorize::forgotpassword_emailcorporatecheck', [
            ':value',
            'Email'
        ]);
        return $validate;
    }
     public static function forgotpassword_emailcorporatecheck($email)
    {
        //MongoDB
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_PEOPLE,['email'=>$email,'user_type'=>'O']);
        return ($result>0)?TRUE:FALSE;
    }
    /* CORPORATE PORTAL */
    
    
    
}
