<?php
defined('SYSPATH') or die('No direct script access.');
/**************************************************

* Contains Admin(Login,Logout,Forgot Password,etc,...)details

* @Package: taximobility

* @Author: taximobility Team

* @URL : http://ndot.in/

*****************************************************/
class Model_Admin extends Model
{
    /**
     * ****__construct()****
     *
     * setting up session variables
     */
    public function __construct()
    {
        $this->session          = Session::instance();
        $this->username         = $this->session->get("username");
        $this->admin_session_id = $this->session->get("id");
		$this->user_createdby = $this->userid = $this->session->get("userid");
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');
        $this->country_id     = $this->session->get('country_id');
        $this->state_id       = $this->session->get('state_id');
        $this->city_id        = $this->session->get('city_id');
        $this->mdate            = commonfunction::getCurrentTimeStamp();
        //$this->DisplayDateTimeFormat = commonfunction::DisplayDateTimeFormat();
        //MongoDB Instance
        $this->mongo_db         = MangoDB::instance('default');
    }
    public function get_db_language()
    {
        $lanuage_updated = DB::select('site_language')->from(SITE)->execute()->as_array();
        return $lanuage_updated;
    }
    /**
     * ****admin_login()****
     *
     * @param $email varchar, $password varchar
     * @return int one or zero
     */
    public function admin_login($email = "", $password = "")
    {
        $password  = md5($post_value_array['password']);
        $resultset = DB::select()->from(PEOPLE)->where('email', '=', $email)->where('password', '=', $password)->where('usertype', '=', 'A')->where('status', '=', 'A')->execute()->as_array();
        if (count($resultset) == 1) {
            $this->session->set("email", $resultset[0]["email"]);
            $this->session->set("username", $resultset[0]["username"]);
            $this->session->set("id", $resultset[0]["id"]);
            //$this->session->set("usertype", "A");
            $this->session->set("user_type", $resultset[0]["usertype"]);
            //Front end login
            $this->session->set("user_name", $resultset["0"]["username"]);
            $this->session->set("userid", $resultset["0"]["id"]);
            $this->session->set("usertype", $resultset["0"]["usertype"]);
            $this->session->set("user_email", $resultset["0"]["email"]);
            return 1;
        } else {
            $email = DB::select()->from(PEOPLE)->where('email', '=', $email)->execute()->as_array();
            return (count($email) == 0) ? 2 : 0;
        }
    }
    /**
     * ****count_user_login_list()****
     *
     * @return user list count of array 
     */
    public function count_user_login_list()
    {
        $rs = DB::select()->from(USER_LOGIN_DETAILS)->execute()->as_array();
        return count($rs);
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
			
			$result = $this->mongo_db->count(MDB_PEOPLE,['user_type'=>['$nin'=> ["A","C","S"]],'status'=>['$ne'=>'T'],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY]);
			//print_r($result);exit;
			return $result;
		} else {
			$result = $this->mongo_db->find(MDB_PEOPLE,['user_type'=>['$nin'=> ["A","C","S"]],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY,'status'=>['$ne'=>'T']],['_id','name','lastname','email','phone','address','created_date','user_type','status'])->sort(['created_date'=>-1])->skip($offset)->limit($val);
            //echo '<pre>';print_r(iterator_to_array($result));exit;
			return (!empty($result))?iterator_to_array($result):[];
		}
    }
    
    public function get_all_search_list($keyword = "", $user_type = "", $status = "", $offset = "", $val = "",$find_count = false)
    {
        $keyword        = str_replace("%", "!%", $keyword);
        $keyword        = str_replace("_", "!_", $keyword);
        /*//condition for status
        //====================== 
        $usertype_where = ($user_type) ? " AND user_type = '$user_type'" : "";
        //condition for status
        //====================== 
        $staus_where    = ($status) ? " AND status = '$status'" : "";
        //search result export
        //=====================
        $name_where     = "";
        if ($keyword) {
            $name_where = " AND(name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        if ($user_type == 'C') {
            $query = "SELECT * FROM  " . COMPANY . " LEFT JOIN  " . PEOPLE . " ON " . PEOPLE . ".id = " . COMPANY . ".userid WHERE 1=1  and user_type !='A' $usertype_where $staus_where $name_where order by created_date DESC limit $val offset $offset ";
        } else {
            $query = " select * from " . PEOPLE . " where 1=1 and  user_type !='A' $usertype_where $staus_where $name_where order by created_date DESC limit $val offset $offset";
        }
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        
        //MongoDB
        if((!empty($keyword)) && (!empty($status)) && (!empty($user_type))) {
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY],['user_type' => $user_type ],['status' => $status ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if (!empty($keyword) && (!empty($user_type))) {
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY],['user_type' => $user_type ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if (!empty($keyword) && (!empty($status))) {
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY],['status' => $status ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ]] ] ] ];
        } else if(!empty($status) && (!empty($user_type))){
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY],['user_type' => $user_type ],['status' => $status ]] ];
        } else if(!empty($keyword)){
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]],'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if(!empty($user_type)){
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]]],['user_type' => $user_type,'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY ]]];
        } else if (!empty($status)) {
            $srch_query = [ "\$and" => [['user_type'=>['$nin'=> ["A","C","S"]]],['status' => $status ,'company_id'=>COMPANY_CID,'login_country'=>DEFAULT_COUNTRY]]];
        }
        //echo '<pre>';print_r($srch_query);//exit;
        if($user_type == 'C'){
            $common_arguments = [
                  [
                    '$match' => $srch_query
                ],
                [
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => '_id',
                        'foreignField' => 'companydetails.userid',
                        'as' => 'company'
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],
              
            ];
            if($find_count){
                $count_arguments = [
                    [
                        '$project' => [
                            'result' => '$_id'
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
                $merge_arguments = array_merge($common_arguments, $count_arguments);
                $result          = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
                //echo "<pre>if";print_r($result['result']);exit;
                return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
            } else {
                $field_arguments = [
                    [
                        '$sort' => [ 
                            'created_date' => -1
                        ],
                    ],
                    [
                        '$project' => ['_id'=>0,
                            '_id' => '$_id',
                            'created_date' => '$created_date',
                            'name' => '$name',
                            'lastname' => '$lastname',
                            'email' => '$email',
                            'address' => '$address',
                            'status' => '$status',
                            'phone' => '$phone',
                            'user_type' => '$user_type',
                        ]
                    ],
                    ['$skip'	=> (int)$offset ],
                    ['$limit'	=> (int)$val ]
                ];
                $merge_arguments = array_merge($common_arguments, $field_arguments);
                $result    = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
                //echo "<pre>else";print_r($result['result']); exit;
                return (!empty($result['result'])) ? $result['result'] : [];
            }
        } else {
            if($find_count){
                $result = $this->mongo_db->count(MDB_PEOPLE,$srch_query);
                return $result;
            } else {
                $result = $this->mongo_db->find(MDB_PEOPLE,$srch_query,[])->sort(['created_date'=>-1])->skip($offset)->limit($val);
                return (!empty($result))?iterator_to_array($result):[];
            }
        }
    }
    /**
     * ****edit_users()****
     *@param $current_uri int,$post_value_array array
     *@return alluser list count of array 
     */
    public function edit_users($current_uri, $post_value_array, $image_name)
    {
        $random_key = Commonfunction::admin_random_user_password_generator();
        $abt_me     = isset($post_value_array['aboutme']) ? $post_value_array['aboutme'] : "";
        $status     = isset($post_value_array['status']) ? ACTIVE : IN_ACTIVE;
        $query      = [
            'firstname' => $post_value_array['firstname'],
            'lastname' => $post_value_array['lastname'],
            'email' => $post_value_array['email'],
            'username' => $post_value_array['username'],
            'aboutme' => $abt_me,
            'paypal_account' => $post_value_array['paypal_account'],
            'status' => $status,
            'activation_code' => $random_key,
            'updated_date' => $this->mdate,
            'country_id' => $post_value_array['country_id']
        ];
        if ($image_name != "")
            $query['photo'] = $image_name;
        $result = DB::update(PEOPLE)->set($query)->where('id', '=', $current_uri)->execute();
        if (count($result) > 0) {
            $sql    = "SELECT status FROM " . PEOPLE . " WHERE id ='$current_uri' ";
            $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
            return $result;
        }
    }
    /**
     * ****get_users_data()****
     *@param $current_uri int
     *@return alluser lists
     */
    public function get_users_data($current_uri = '')
    {
        $rs = DB::select()->from(PEOPLE)->where('id', '=', $current_uri)->execute()->as_array();
        return $rs;
    }
    /**To Check User Name is Already Available or Not**/
    public static function unique_username($name)
    {
        // Check if the username already exists in the database
        $sql    = "SELECT username FROM " . PEOPLE . " WHERE username='$name' AND status!='D' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    /*To Check UserName is Already Available while Edit User Details*/
    public static function unique_username_update($name, $id)
    {
        // Check if the username already exists in the database
        $sql    = "SELECT username FROM " . PEOPLE . " WHERE username='$name' AND id !='$id' AND status!='D' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    /**Check Whether Email is Already Exist or Not**/
    public function check_email($email = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' AND status!='D' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    /**Reset User Password if User Forgot Password**/
    public function forgot_password($array_data, $post_value_array, $random_key)
    {
        $pass   = md5($random_key);
        // Create a new user record in the database
        $result = DB::update(PEOPLE)->set([
            'password' => $pass,
            'updated_date' => $this->mdate
        ])->where('email', '=', $array_data['email'])->execute();
        if ($result) {
            $rs = DB::select('username', 'email')->from(PEOPLE)->where('email', '=', $post_value_array['email'])->where('status', '=', ACTIVE)->execute()->as_array();
            return $rs;
        } else {
            return 0;
        }
    }
    /**Check Email Exist or Not while Updating User Details**/
    public function check_email_update($email = "", $id = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' AND id !='$id' AND status!='D' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    /**
     * ****add_users()****
     *@return insert user values in database
     */
    public function add_users($validator, $post_value_array, $image_name, $activation_key)
    {
        $randomkey = Commonfunction::admin_random_user_password_generator();
        $email     = $post_value_array['email'];
        $status    = isset($post_value_array['status']) ? "A" : "I";
        $rs        = DB::insert(PEOPLE)->columns([
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
            $email = DB::select()->from(PEOPLE)->where('email', '=', $email)->execute()->as_array();
            return $email;
        } else {
            if (count($email) == 0) {
                return 2;
            }
            return 0;
        }
    }
    //function for auto login while clicking activation_link	
    public function auto_user_login($activation_code)
    {
        $rs = DB::select('username', 'id')->from(PEOPLE)->where('activation_code', '=', $activation_code)->execute()->as_array();
        if (count($rs) == 1) {
            $this->session->set("UserName", $rs[0]["username"]);
            $this->session->set("UserId", $rs[0]["id"]);
            return 1;
        }
    }
    /**
     * ****delete_users()****
     *@param $current_uri int
     *@delete user items
     */
    public function delete_users($current_uri)
    {
        //get username and email for sending mail to users
        $username = DB::select('username', 'email')->from(PEOPLE)->where('id', '=', $current_uri)->execute()->as_array();
        if ($username) {
            $sql_query = [
                'status' => USER_DELETE
            ];
            //updated user details from database and set status "D"
            $rs        = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $current_uri)->execute();
        }
        return $username;
    }
    /**
     * ****delete_users_login()****
     *@param $current_uri int
     *@delete user login ip & browser details
     */
    public function delete_users_login($user_login_chk)
    {
        $query = DB::delete(USER_LOGIN_DETAILS)->where('id', 'IN', $user_login_chk)->execute();
        return 1;
    }
    /**
     * ****export_data()****
     *@export user listings
     */
    public function export_data($keyword = "", $user_type = "", $status = "")
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        $xls_output = "<table border='1' cellspacing='0' cellpadding='5'>";
        $xls_output .= "<th>" . __('name') . "</th>";
        $xls_output .= "<th>" . __('lastname') . "</th>";
        $xls_output .= "<th>" . __('email') . "</th>";
        $xls_output .= "<th>" . __('username') . "</th>";
        $xls_output .= "<th>" . __('created_date') . "</th>";
        $xls_output .= "<th>" . __('usertype_label') . "</th>";
        $xls_output .= "<th>" . __('status') . "</th>";
        $file           = 'Export';
        //condition for Usertype
        //====================== 
        $usertype_where = ($user_type) ? " AND usertype = '$user_type'" : "";
        //condition for status
        //====================== 
        $staus_where    = ($status) ? " AND status = '" . ACTIVE . "' or status ='" . IN_ACTIVE . "' " : "";
        //search result export
        //=====================
        $name_where     = "";
        if ($keyword) {
            $name_where = " AND(name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!') ";
        }
        $query   = " select distinct name,lastname,username,email,created_date,user_type,status from " . PEOPLE . " where 1=1  $usertype_where $staus_where $name_where order by created_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        foreach ($results as $result) {
            $status = ($result['status'] == "A") ? "Active" : "Inactive";
            $type   = ($result['user_type'] == "A") ? "Admin" : "User";
            $xls_output .= "<tr>";
            $xls_output .= "<td>" . mb_convert_encoding($result['name'], 'utf-16', 'utf-8') . "</td>";
            $xls_output .= "<td>" . mb_convert_encoding($result['lastname'], 'utf-16', 'utf-8') . "</td>";
            $xls_output .= "<td>" . $result['email'] . "</td>";
            $xls_output .= "<td>" . mb_convert_encoding($result['username'], 'utf-16', 'utf-8') . "</td>";
            $xls_output .= "<td>" . $result['created_date'] . "</td>";
            $xls_output .= "<td>" . $type . "</td>";
            $xls_output .= "<td>" . $status . "</td>";
            $xls_output .= "</tr>";
        }
        $xls_output .= "</table>";
        $filename = $file . "_" . date("Y-m-d_H-i", time());
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Length: " . strlen($xls_output));
        header("Content-type: application/vnd.ms-excel");
        header("Content-type: application/octet-stream, charset=UTF-8; encoding=UTF-8");
        header("Content-Disposition: attachment; filename=" . $filename . ".xls");
        echo $xls_output;
        exit;
    }
    /**
     * ****get_user_status()****
     *@return user status
     */
    public function get_user_status()
    {
        $rs = DB::select('status')->from(PEOPLE)->group_by('status')->execute()->as_array();
        return $rs;
    }
    /**
     * ****add_user_form()****
     *@param $arr validation array
     *@validation check
     */
    public function validate_user_form($arr)
    {
        $arr['firstname'] = trim($arr['firstname']);
        $arr['email']     = trim($arr['email']);
        //updated for trim of username while posting and not proper validation
        $arr['username']  = trim($arr['username']);
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //commented (front end no validation for alpha space and alpha dash)       
            
        //->rule('firstname','alpha_space')
            
        //->rule('lastname','alpha_dash')
            ->rule('lastname', 'min_length', [
            ':value',
            '1'
        ])->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '32'
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
    /**
     * ****edit_user_form()****
     
     *@param $arr validation array
     *@validation check
     */
    public function validate_edit_user_form($arr)
    {
        $arr['firstname'] = trim($arr['firstname']);
        $arr['email']     = trim($arr['email']);
        //updated for trim of username while posting and not proper validation
        $arr['username']  = trim($arr['username']);
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //commented (front end no validation for alpha space and alpha dash)            
            
        //->rule('firstname','alpha_space')
            
        //->rule('lastname','alpha_dash')
            ->rule('lastname', 'min_length', [
            ':value',
            '1'
        ])->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '32'
        ])->rule('aboutme', 'not_empty')->rule('aboutme', 'min_length', [
            ':value',
            '10'
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
    /**
     * ****my_info_form****
     *@param $arr validation array
     *@validation check
     */
    public function validate_my_info_form($arr)
    {
        $arr['firstname'] = trim($arr['firstname']);
        $arr['email']     = trim($arr['email']);
        //updated for trim of username while posting and not proper validation
        $arr['username']  = trim($arr['username']);
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //commented (front end no validation for alpha space and alpha dash)            
            
        //->rule('firstname','alpha_space')
            
        //->rule('lastname','alpha_dash')
            ->rule('lastname', 'min_length', [
            ':value',
            '1'
        ])->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '32'
        ])->rule('aboutme', 'not_empty')->rule('aboutme', 'min_length', [
            ':value',
            '10'
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
        ])->rule('email', 'not_empty')->rule('email', 'email')->rule('paypal_account', 'email')->rule('username', 'not_empty')->rule('username', 'min_length', [
            ':value',
            '4'
        ])->rule('username', 'max_length', [
            ':value',
            '30'
        ]);
    }
    /**
     * ****validate_login()****
     *@param $arr validation array
     *@validation check
     */
    public function validate_login($arr)
    {
        //$post->pre_filter('ucfirst', 'email');
        return Validation::factory($arr)
        //->rule('name','not_exists',array(':validation', 'email', ':field', array('password')));
            ->rule('email', 'not_empty')->rule('email', 'email')->rule('password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('password', 'not_empty');
    }
	/** passenger list **/
    public function all_passenger_list($offset, $val, $find_count = FALSE)
    {
        if ($find_count == TRUE) {
			$match_query = [];
			$match_query['name'] = ['$ne' => ''];
            $arguments = [
              /*  array(
                    '$unwind' => '$passengerdetails'
                ),*/
              
                    [
                    '$match' => $match_query      
                ],
                      [    
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => 'account_type',
					'foreignField' => '_id',
					'as' => 'account'
				]
				],/*
				array(
                    '$unwind' => '$account'
                ),*/
				
                [
                    '$project' => [
                        'id' => '$_id'
                    ]
                ],
				
				[
                    '$sort' => [
                        'created_date' => -1
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
			$result    = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
            //echo "<pre>"; print_r($result['result'][0]['count']); exit;
            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
			$match_query = [];
			$match_query['name'] = ['$ne' => ''];
            $arguments = [
                  [
                    '$match' => $match_query      
                ],
              /*  array(
                    '$unwind' => '$passengerdetails'
                ),*/
                [
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => 'account_type',
					'foreignField' => '_id',
					'as' => 'account'
				]
				],
				/*
				array(
                    '$unwind' => '$account'
                ),*/
				[
                    '$project' => [
						'_id' => '$_id',
						'country_code' => '$country_code',
						'phone' => '$phone',
						'profile_image' => '$profile_image',
						'name' => '$name',
						'email' => '$email',
                        'address' => '$address',
						'otp' => '$otp',
						'referral_code' => '$referral_code',
						'wallet_amount' => '$wallet_amount',
						'created_date' => '$created_date',
						'user_status' => '$user_status',
						'parent_id' => '$parent_id',
                        'account_type' => '$account_type',
						'vip_user' => '$vip_user',
						'account_type_name' => '$account.account_type',
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
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
            //echo "<pre>"; print_r($result['result']); exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    
    /** for getting passenger listing search **/
    public function get_all_searchpassenger_list($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = false)
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        /*//condition for status
        //======================
        $staus_where = ($status) ? " AND user_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND(name LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%'  escape '!' ) ";
        }
        $company_where = ($company) ? " AND passenger_cid = '$company'" : "";
        $query         = " select * from " . PASSENGERS . " where 1=1 $staus_where $name_where $company_where order by created_date DESC limit $val offset $offset";
        $results       = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB
        if((!empty($keyword)) && (!empty($status)) && (!empty($company))) {
            $srch_query = [ "\$and" => [['passenger_cid' => (int)$company ],['user_status' => $status ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if (!empty($keyword) && (!empty($company))) {
            $srch_query = [ "\$and" => [['passenger_cid' => (int)$company ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if (!empty($keyword) && (!empty($status))) {
            $srch_query = [ "\$and" => [['user_status' => $status ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if(!empty($status) && (!empty($company))){
            $srch_query = [ "\$and" => [['passenger_cid' => (int)$company ],['user_status' => $status ] ] ];
        } else if(!empty($keyword)){
            $srch_query = [ "\$and" => [["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        } else if(!empty($company)){
            $srch_query = [ "\$and" => [['passenger_cid' => (int)$company ]]];
        } else if (!empty($status)) {
            $srch_query = [ "\$and" => [['user_status' => $status ]]];
        }
		
		$common_arguments = [
			
			[
				'$match' => $srch_query
			],
		];
		if($find_count){
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PASSENGERS, $merge_arguments);
			//echo "<pre>if";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'created_date' => -1
					],
				],
				[
                    '$project' => [
						'_id' => '$_id',
						'country_code' => '$country_code',
						'phone' => '$phone',
                        'profile_image' => '$profile_image',
						'otp' => '$otp',
						'name' => '$name',
						'email' => '$email',
						'address' => '$address',
						'referral_code' => '$referral_code',
						'wallet_amount' => '$wallet_amount',
						'created_date' => '$created_date',
                        'user_status' => '$user_status',
						'vip_user' => '$vip_user',
                    ]
                ],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);

			$result    = $this->mongo_db->aggregate(MDB_PASSENGERS, $merge_arguments);
			//echo "<pre>else";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
    /**
     * ****get_sendemail_validation()****
     *@param $arr validation array
     *@validation check
     */
    public function get_sendemail_validation($arr)
    {
        $arr['subject'] = trim($arr['subject']);
        $arr['message'] = trim($arr['message']);
        return Validation::factory($arr)->rule('user_status', 'not_empty')->rule('to_user', 'not_empty')->rule('subject', 'not_empty')->rule('subject', 'alpha_space')->rule('subject', 'min_length', [
            ':value',
            '10'
        ])->rule('subject', 'max_length', [
            ':value',
            '512'
        ])->rule('subject', 'alpha_space')->rule('message', 'not_empty')
        //->rule('message','alpha_space')
            ->rule('message', 'min_length', [
            ':value',
            '20'
        ])->rule('message', 'max_length', [
            ':value',
            '1024'
        ]);
    }
    public function image_upload($files_value_array)
    {
        return Validation::factory($files_value_array)->rule('photo', 'Upload::not_empty')->rule('photo', 'Upload::valid')->rule('photo', 'Upload::type', [
            'Upload::type',
            [
                'jpg',
                'png',
                'gif'
            ]
        ]);
    }
    /**
     * ****sendemail()****
     *@email send to too many (bulk) users
     */
    public function sendemail($details, $headers, $variables, $from)
    {
        //mail sending option to all users and insert userid in database
        //===============================================================
        $user_id = "";
        $user_id = count($post_value_array['to_user']);
        for ($i = 0; $i < $user_id; $i++) {
            $to            = DB::select('email', 'username', 'status')->from(PEOPLE)->where('id', '=', $post_value_array['to_user'][$i])->execute()->as_array();
            //common email template not included so common email variable replace functionality hided
            /*	$username = array(USERNAME => $to[$i]['username'],TO_MAIL => $to[$i]['email']);
            $replace_variable = array_merge($variables,$username); 
            
            //send mail to user by defining value from here               
            $mail = Commonfunction::get_email_template_details(1,$replace_variable);*/
            $subject       = $details['subject'];
            $message       = $details['message'];
            //creating object for model
            //=========================      
            $mail          = Model::factory('commonfunction');
            $smtp_settings = $mail->get_smtp_settings();
            $smtp_config   = [
                'driver' => 'smtp',
                'options' => [
                    'hostname' => $smtp_settings[0]['smtp_host'],
                    'username' => $smtp_settings[0]['smtp_username'],
                    'password' => $smtp_settings[0]['smtp_password'],
                    'port' => $smtp_settings[0]['smtp_port'],
                    'encryption' => 'ssl'
                ]
            ];
            //send bulk mail to users
            //======================= 
            if (Email::connect($smtp_config)) {
                if (Email::send($to[0]['email'], $from, $subject, $message, $html = true) == 0) {
                    // return 0;
                }
                //return 1;
            } else {
                if (mail($to[0]['email'], $from, $subject, $message, $headers)) {
                    //return 1;
                }
            }
            $result = DB::insert(BULKEMAIL)->columns([
                'user_id',
                'user_status',
                'sent_date'
            ])->values([
                $post_value_array['to_user'][$i],
                $to[0]['status'],
                $this->mdate
            ])->execute();
        }
    }
    /**
     * **** get_user_type_list()****
     *@param $email varchar
     *@email send to users
     */
    public function get_user_type_list($status_val, $validator, $error)
    {
        //$status_name = isset($status_val["to_user"]) ? $status_val["to_user"] :'';
        $users_validator = [];
        if (count($validator) > 0) {
            //echo $validator[0]['to_user']."test";
            $users_validator = explode(",", $validator['validator'][0]['to_user']);
        }
        $status   = ($status_val['status'] == 'A') ? "A" : "I";
        $rs       = DB::select('id', 'username')->from(PEOPLE)->where('status', '=', $status)->order_by('username', 'ASC')->execute()->as_array();
        $build_dd = "<select name='to_user[]' multiple='multiple' id='users'>";
        foreach ($rs as $result) {
            $selected = (in_array($result['id'], $users_validator)) ? "selected='selected' " : '';
            $name     = ucfirst($result['username']);
            $build_dd .= "<option value='" . $result['id'] . "' $selected >" . $name . "</option>";
        }
        echo $build_dd .= "</select>";
        if (count($error['errors']) > 0) {
            $build_dd = "<span class='error'>";
            $build_dd .= $error['errors'][0]['to_user'];
            $build_dd .= "</span>";
            echo $build_dd;
        }
        exit;
    }
    /**
     * ****all_user_login_list()****
     *@param $offset int, $val int
     *@return alluser list count of array 
     */
    public function all_user_login_list($offset, $val)
    {
        //Query for listing login listings   
        $query   = "select " . USER_LOGIN_DETAILS . '.last_login' . ',' . USER_LOGIN_DETAILS . '.login_ip' . ',' . USER_LOGIN_DETAILS . '.user_agent' . ',' . USER_LOGIN_DETAILS . '.ban_ip' . ',
				' . USER_LOGIN_DETAILS . '.id' . ',' . PEOPLE . '.username' . " from " . USER_LOGIN_DETAILS . " left join " . PEOPLE . " on " . PEOPLE . '.id' . '=' . USER_LOGIN_DETAILS . '.userid' . " order by last_login DESC limit $offset, $val ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /**
     * ****get_all_user_login_search_list()***
     *@param $keyword string, $user_type char, $status char
     *@return search result string
     */
    public function get_all_user_login_search_list($keyword = "")
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        $name_where = "";
        if ($keyword) {
            $name_where = " WHERE 1=1 AND(username LIKE  '%$keyword%' escape '!' ";
            $name_where .= " OR " . USER_LOGIN_DETAILS . ".login_ip LIKE  '%$keyword%' escape '!' ) ";
            //$name_where .= " or username LIKE '%$keyword%') ";
        }
        //Query for listing login listings   
        $query   = "select " . USER_LOGIN_DETAILS . '.last_login' . ',' . USER_LOGIN_DETAILS . '.login_ip' . ',' . USER_LOGIN_DETAILS . '.user_agent' . ',' . USER_LOGIN_DETAILS . '.ban_ip' . ',
				' . USER_LOGIN_DETAILS . '.id' . ',' . PEOPLE . '.username' . " from " . USER_LOGIN_DETAILS . " left join " . PEOPLE . " on " . PEOPLE . '.id' . '=' . USER_LOGIN_DETAILS . '.userid' . $name_where . " order by last_login DESC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /**Check Image Exist or Not while Updating Job Details**/
    public function check_userphoto($userid = "")
    {
        $sql    = "SELECT photo FROM " . PEOPLE . " WHERE id ='$userid'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['photo'];
        }
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
    //update site logo null 
    public function update_logo_image($id)
    {
        $sql_query = [
            'site_logo' => ""
        ];
        $result    = DB::update(SITE)->set($sql_query)->where('id', '=', $id)->execute();
        return 1;
    }
    public function change_password_validation($arr)
    {
        return Validation::factory($arr)
        //->rule('old_password','alpha_dash')
            ->rule('old_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('old_password', 'not_empty')->rule('old_password', 'min_length', [
            ':value',
            '4'
        ])->rule('old_password', 'max_length', [
            ':value',
            '16'
        ])->rule('new_password', 'not_empty')
        //->rule('new_password','alpha_dash')
            ->rule('new_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('confirm_password', 'not_empty')
        //->rule('confirm_password','alpha_dash')
            ->rule('confirm_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('confirm_password', 'min_length', [
            ':value',
            '4'
        ])->rule('confirm_password', 'matches', [
            ':validation',
            'old_password',
            'confirm_password'
        ])->rule('confirm_password', 'max_length', [
            ':value',
            '16'
        ]);
    }
    /**User Change Password**/
    public function change_password($array, $post_value_array, $userid = "")
    {
        $pass   = md5($array['confirm_password']);
        // Create a new user record in the database
        $result = DB::update(USERS)->set([
            'password' => $pass
        ])->where('id', '=', $userid)->execute();
        if (count($result) == SUCESS) {
            $rs = DB::select('username', 'password', 'email')->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
            return $rs;
        }
    }
    /**Validating Change Password Details**/
    public function validate_changepwd($arr)
    {
        return Validation::factory($arr)->rule('old_password', 'not_empty')
        //->rule('old_password','alpha_dash')
            ->rule('old_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('old_password', 'max_length', [
            ':value',
            '16'
        ])->rule('new_password', 'not_empty')
        //->rule('new_password','alpha_dash')
            ->rule('new_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('new_password', 'max_length', [
            ':value',
            '16'
        ])->rule('confirm_password', 'not_empty')->rule('confirm_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])
        //->rule('confirm_password','alpha_dash')
            
        //->rule('confirm_password', 'equals', array(':validation', 'new_password'))
            ->rule('confirm_password', 'matches', [
            ':validation',
            'new_password',
            'confirm_password'
        ])->rule('confirm_password', 'max_length', [
            ':value',
            '16'
        ]);
    }
    /**Validating Reset Password Details **/
    public function validate_resetpwd($arr)
    {
        return Validation::factory($arr)->rule('new_password', 'not_empty')
        //->rule('new_password','alpha_dash')
            ->rule('new_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('new_password', 'max_length', [
            ':value',
            '16'
        ])->rule('conf_password', 'not_empty')
        //->rule('conf_password','alpha_dash')
            ->rule('conf_password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])
        //->rule('conf_password', array(':equals','new_password'))
            
        //->rule('conf_password', 'matches')
            ->rule('conf_password', 'max_length', [
            ':value',
            '16'
        ]);
    }
    /**Check Whether the Eneterd Password is Correct While User Change Password**/
    public function check_pass($pass = "", $userid = "")
    {
        $result   = DB::select()->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
        $pass     = md5($pass);
        $password = $result["0"]["password"];
        if ($password == $pass) {
            return 1;
        } else {
            return 0;
        }
    }
    /**User Reset Password**/
    public function reset_password($array, $post_value_array, $id)
    {
        $pass   = md5($array['conf_password']);
        // Create a new user record in the database
        $result = DB::update(PEOPLE)->set([
            'password' => $pass
        ])->where('id', '=', $id)->execute();
        echo "ok";
        return 1;
    }
    /**
     * ****count_user_messages_list()****
     * @return user messages count 
     */
    public function count_user_messages_list()
    {
        $rs = DB::select()->from(USER_EMAIL)->execute()->as_array();
        return count($rs);
    }
    /**
     * ****all_user_messages_list()****
     **param offset int,$val int
     *@return all job_orders list 
     */
    public function all_user_messages_list($offset, $val)
    {
        //query to display all user messages listings	
        $query  = " SELECT U.username AS receivername,U1.username AS sendername,U1.id AS usrid,
						UEB.subject,UEB.random_number,U1.usertype as sendertype,U1.status as senderstatus,
						UEB.flag_status,UEB.id,
						UEB.sent_date,UEB.order_no,UEB.id,
						JD.job_title,JD.job_url
						FROM " . USER_EMAIL . " AS UEB
						LEFT JOIN " . PEOPLE . " AS U ON ( U.id = UEB.receiver_id )
						LEFT JOIN " . PEOPLE . " AS U1 ON ( U1.id = UEB.sender_id )
						LEFT JOIN " . JOB_DETAILS . " AS JD ON ( JD.id = UEB.job_id )
						ORDER BY sent_date DESC LIMIT $offset,$val ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    /**
     * ****all_msg_sender_list****
     *@return all buyers(who order job) list 
     */
    public function all_msg_sender_list()
    {
        //where condition included for empty entries in drop down (updated on 22/11/2011)
        $query  = " SELECT  DISTINCT U1.username AS buyername,U1.id AS userid1 
						FROM " . USER_EMAIL . " AS UEB
						LEFT JOIN " . PEOPLE . " AS U1 ON ( U1.id = UEB.sender_id )
						LEFT JOIN " . JOB_DETAILS . " AS JD ON ( JD.id = UEB.job_id ) WHERE U1.id !=''
						ORDER BY U1.username ASC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    /**
     * ****all_msg_receiver_list****
     *@return all seller(who doing job) list 
     */
    public function all_msg_receiver_list()
    {
        //where condition included for empty entries in drop down (updated on 22/11/2011)
        $query  = " SELECT  DISTINCT U.username AS sellername,U.id AS userid
						FROM " . USER_EMAIL . " AS UEB
						LEFT JOIN " . PEOPLE . " AS U ON ( U.id = UEB.receiver_id )
						LEFT JOIN " . JOB_DETAILS . " AS JD ON ( JD.id = UEB.job_id ) WHERE U.id !=''
						ORDER BY U.username ASC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    /**
     * ****all_job_orders()****
     */
    public function all_job_orders()
    {
        $rs = DB::select('order_no', 'id')->from(JOB_ORDERS)->execute()->as_array();
        return $rs;
    }
    /**
     * ****get_all_user_messages_search_list()***
     *@param $keyword string, $user_type char, $status char
     *@return search result string
     */
    public function get_all_user_messages_search_list($sender_search = "", $receiver_search = "", $order_search = "", $job_search = "")
    {
        $order_search    = str_replace("%", "!%", $order_search);
        $order_search    = str_replace("_", "!_", $order_search);
        //condition for job search
        //====================== 
        $job_where       = ($job_search) ? " AND UE.job_id = '$job_search'" : "";
        //condition for sender name
        //==========================
        $sender_where    = ($sender_search) ? " AND  UE.sender_id = '$sender_search'" : "";
        //condition for receiver name
        //===========================
        $receiver_where  = ($receiver_search) ? " AND  UE.receiver_id = '$receiver_search'" : "";
        //condition for job order search
        //===============================
        $job_order_where = ($order_search) ? " AND  UE.order_no LIKE '%$order_search%' escape '!' " : "";
        $query           = "SELECT UE.order_no,UE.subject,
					        U.username AS sendername,
					        U1.username AS receivername,
							  U.id AS usrid,
							  U.status as senderstatus,
							  U.usertype as sendertype,
							  UE.random_number,
							  JD.job_title,
							  JD.job_url,
							  UE.sent_date,
							  UE.id,
							  UE.flag_status
							  
						  FROM " . USER_EMAIL . " AS UE
		       		  LEFT JOIN " . JOB_DETAILS . " AS JD ON (JD.id = UE.job_id)
				 		  LEFT JOIN " . PEOPLE . " AS U ON(U.id = UE.sender_id)
				 		  LEFT JOIN " . PEOPLE . " AS U1 ON(U1.id = UE.receiver_id)
						  WHERE 1=1 $job_where $sender_where $receiver_where $job_order_where order by UE.sent_date DESC ";
        $results         = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //function for displaying job in drop down	
    public function all_job_list()
    {
        $query   = " SELECT DISTINCT JD.job_url,JD.job_title,JD.id 
					  FROM " . USER_EMAIL . " AS UE
		       	  LEFT JOIN " . JOB_DETAILS . " AS JD ON (JD.id = UE.job_id)
		       	  WHERE JD.id = UE.job_id ORDER BY JD.job_title ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /**
     * ****update_flag_status()****
     *@return update flag status in database
     */
    public function update_flag_status($msg_id, $flag_status)
    {
        $db_set = "";
        switch ($flag_status) {
            case ACT:
                // if status is ACTIVE means  
                //===========================
                $db_set = " flag_status = '" . IN_ACTIVE . "' ";
                break;
            case INACT:
                // if status is IN_ACTIVE means
                //==============================
                $db_set = " flag_status = '" . ACTIVE . "' ";
                break;
        }
        $query  = " UPDATE " . USER_EMAIL . " SET $db_set WHERE 1=1 AND id = '$msg_id' ";
        $result = Db::query(Database::UPDATE, $query)->execute();
        return $result;
    }
    /**
     * ****update_sender_status()****
     *@return update flag status in database
     */
    public function update_sender_status($sender_id, $sender_status)
    {
        $db_set = "";
        switch ($sender_status) {
            case 1:
                // if status is ACTIVE means  
                //===========================
                $db_set = " status = '" . IN_ACTIVE . "' ";
                break;
            case 0:
                // if status is IN_ACTIVE means
                //==============================
                $db_set = " status = '" . ACTIVE . "' ";
                break;
        }
        $query  = " UPDATE " . PEOPLE . " SET $db_set WHERE 1=1 AND id = '$sender_id' ";
        $result = Db::query(Database::UPDATE, $query)->execute();
        return $result;
    }
    /**
     * ****more_user_action()****
     *@return delete,flag,unflag etc.....
     */
    public function more_usermsg_action($type, $msg_id)
    {
        //if action delete means
        //=======================
        if ($type == "del") {
            $query = DB::delete(USER_EMAIL)->where('id', 'IN', $msg_id)->execute();
            return $type;
        }
        $db_set = $and_where = "";
        if (($type == "flag") || ($type == "unflag")) {
            //checking for more action to do using $type
            //===========================================	
            switch ($type) {
                //if action "flag" selected means
                //==================================		
                case FLAG:
                    // if flag is selected set value is "A" 
                    //===========================================
                    $db_set    = " flag_status = '" . ACTIVE . "' ";
                    $and_where = " AND flag_status = '" . IN_ACTIVE . "' ";
                    break;
                //if action "unflag" selected means
                //====================================		    
                case UNFLAG:
                    // if unflag is selected set value is "I" 
                    //==============================================  
                    $db_set    = " flag_status = '" . IN_ACTIVE . "' ";
                    $and_where = " AND flag_status = '" . ACTIVE . "' ";
                    break;
            }
            //update database with $msg_id and all other details(delete, flag, unflag)
            //======================================================================================
            $query  = " UPDATE " . USER_EMAIL . " SET $db_set WHERE 1=1 AND id IN ('" . implode("','", $msg_id) . "') $and_where ";
            $result = Db::query(Database::UPDATE, $query)->execute();
            return $type;
        }
        $and_where = "";
        if (($type == "inactive") || ($type == "active")) {
            //checking for more action to do using $type
            //===========================================	
            switch ($type) {
                //if action "INACTIVE_ACTION" selected means
                //=========================================
                case "inactive":
                    // if inactive is selected set value is "A" 
                    //===========================================
                    $db_set    = "status = '" . IN_ACTIVE . "' ";
                    $and_where = " AND status = '" . ACTIVE . "' ";
                    break;
                //if action "ACTIVE" selected means
                //====================================		    
                case "active":
                    // if ACTIVE is selected set value is "A" 
                    //==============================================  
                    $db_set    = "status = '" . ACTIVE . "' ";
                    $and_where = " AND status = '" . IN_ACTIVE . "' ";
                    break;
            }
            //update database with $msg_id and all other details(delete, flag, unflag)
            //======================================================================================
            $query  = " UPDATE " . PEOPLE . " AS U LEFT JOIN " . USER_EMAIL . " AS UE ON (UE.sender_id = U.id) SET $db_set   
			WHERE 1=1 AND U.id != '$this->admin_session_id' AND UE.id IN ('" . implode("','", $msg_id) . "') $and_where ";
            $result = Db::query(Database::UPDATE, $query)->execute();
            return $type;
        }
    }
    /**
     * ****count_contact_requests_list()****
     *
     * @return contact_details count of array 
     */
    public function count_contact_requests_list()
    {
        $rs = DB::select()->from(CONTACT_REQUEST)->execute()->as_array();
        return count($rs);
    }
    /**
     * ****all_contact_requests_list()****
     **param offset int,$val int
     *@return all contact_request list 
     */
    public function all_contact_requests_list($offset, $val)
    {
        //query to display all contact_request listings	
        $query  = " SELECT U.username AS username,CR.name AS name,
						CR.subject,CR.message,CS.subject AS subject1,
						CR.email,CR.telephone,CR.id,
						CR.ip,CR.request_date,CR.contact_request_reply
						FROM " . CONTACT_REQUEST . " AS CR
						LEFT JOIN " . PEOPLE . " AS U ON ( U.id = CR.user_id )
						LEFT JOIN " . CONTACT_SUBJECT . " AS CS ON(CS.id = CR.contact_subjectid)
						ORDER BY CR.request_date DESC LIMIT $offset,$val ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    /**
     * ****delete_contact_request()****
     **param $deleteids array
     *@return all delete_contact_request list 
     */
    public function delete_contact_request($deleteids)
    {
        //check whether id is exist in checkbox or single delete_contact_request
        //======================================================================
        $deleteids = is_array($deleteids) ? implode(",", $deleteids) : $deleteids;
        $arr_chk   = " id in ( $deleteids ) ";
        $query     = " Delete from " . CONTACT_REQUEST . " where $arr_chk ";
        $result    = Db::query(Database::DELETE, $query)->execute();
        return count($result);
    }
    /**
     * ****get_contact_request_details()****
     *@param $id int
     *@return all contact request lists
     */
    public function get_contact_request_details($id)
    {
        //query to display all contact_request listings	
        $query  = " SELECT CR.email,
								CR.subject,
							   CR.message,
							   CS.subject
						FROM " . CONTACT_REQUEST . " AS CR
						LEFT JOIN " . CONTACT_SUBJECT . " AS CS ON (CS.id = CR.contact_subjectid)
						WHERE CR.id = $id ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function validate_auto_reply_contact_form($arr)
    {
        $arr['subject'] = trim($arr['subject']);
        $arr['message'] = trim($arr['message']);
        return Validation::factory($arr)->rule('subject', 'not_empty')
        //->rule('subject', 'alpha_space')
            ->rule('subject', 'min_length', [
            ':value',
            '5'
        ])->rule('message', 'not_empty')
        //->rule('message','alpha_space')
            ->rule('message', 'min_length', [
            ':value',
            '5'
        ]);
    }
    /**
     *****update_auto_reply_status()****
     *@return update auto_reply_status in database
     */
    public function update_auto_reply_status($reply_id)
    {
        $result = DB::update(CONTACT_REQUEST)->set([
            'contact_request_reply' => SUCESS
        ])->where('id', '=', $reply_id)->execute();
        return $result;
    }
    /**
     *****update_banIP_status****
     *@return update BAN IP status in database
     */
    public function update_banIP_status($id, $status)
    {
        $db_set = "";
        switch ($status) {
            case 0:
                // if status is 0 means set block 
                //================================
                $db_set = " ban_ip = '" . BLOCK . "' ";
                break;
            case 1:
                // if status is 1 means set unblock 
                //=================================
                $db_set = " ban_ip = '" . UNBLOCK . "' ";
                break;
        }
        $query  = " UPDATE " . USER_LOGIN_DETAILS . " SET $db_set WHERE 1=1 AND id = '$id' ";
        $result = Db::query(Database::UPDATE, $query)->execute();
        if ($result) {
            //get selected ip blocked/unblocked means get user email address
            //===============================================================
            $query_email  = "select email,username," . USER_LOGIN_DETAILS . ".login_ip," . USER_LOGIN_DETAILS . ".ban_ip from " . USER_LOGIN_DETAILS . " left join " . PEOPLE . " on " . PEOPLE . '.id' . '=' . USER_LOGIN_DETAILS . '.userid' . " where " . USER_LOGIN_DETAILS . '.id' . " = '$id' ";
            $email_result = Db::query(Database::SELECT, $query_email)->execute()->as_array();
            return $email_result;
        }
    }
    /**Validating Forgot Password Details**/
    public function validate_forgotpwd($arr)
    {
        return Validation::factory($arr)->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('email', 'not_empty');
    }
    /**Check Whether Email is Already Exist or Not**/
    public function check_email_admin($email = "")
    {
        $sql    = "SELECT email,usertype FROM " . PEOPLE . " WHERE email='$email' and usertype='" . A . "'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function get_curusrinfo($id = "")
    {
        $sql    = "SELECT login_ip FROM " . USER_LOGIN_DETAILS . " WHERE id='$id' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    /**Site Settings **/
    public function site_settings()
    {
        //$result = DB::select()->from(SITEINFO)->where('id', '!=', $id)->execute()->as_array();
        //MongoDB
        $res    = $this->mongo_db->find_one(MDB_SITEINFO, [
            '_id' => 1
        ]);
        $result = [];
        foreach ($res as $keys => $values) {
            $result[0][$keys] = $values;
        }
		return $result;
    }
    /** validating the site info settings **/
    public function validate_updatesiteinfo($arr = "", $files_value_array = "")
    {		
		if(isset($_FILES['tab_video'])) {
			$arr['tab_video'] = $_FILES['tab_video']['name'];
		}
		return Validation::factory($arr)->rule('app_name', 'not_empty')->rule('app_name', 'max_length', [
            ':value',
            '250'
        ])->rule('site_tagline', 'not_empty')->rule('site_tagline', 'max_length', [
            ':value',
            '50'
        ])->rule('app_description', 'not_empty')->rule('contact_email', 'not_empty')->rule('contact_email', 'max_length', [
            ':value',
            '30'
        ])->rule('contact_email', 'email')->rule('book_now_time', 'not_empty')->rule('book_now_time', 'numeric')->rule('book_now_time', 'Model_Admin::time_isValid',[':value'])->rule('phone_number', 'not_empty')->rule('phone_number', 'Model_Admin::_intMobilePattern', [
            ':value'
        ])->rule('phone_number', 'max_length', [
            ':value',
            '30'
        ])/*->rule('tell_to_friend_message', 'not_empty')*/->rule('meta_keyword', 'not_empty')/*->rule('tax', 'not_empty')->rule('tax', 'numeric')->rule('tax', 'Model_Admin::check_percentage', array(
            ':value'
        )) */
        //->rule('site_country','not_empty')
            ->rule('sms_enable', 'not_empty')->rule('notification_settings', 'not_empty')->rule('notification_settings', 'numeric')/*->rule('admin_commission', 'not_empty')->rule('admin_commission', 'numeric')*/->rule('continuous_request_time', 'not_empty')->rule('continuous_request_time', 'numeric') /*->rule('site_city','not_empty')
        
        ->rule('file', 'Upload::not_empty',array($files_value_array['site_logo']))
        ->rule('file', 'Upload::type', array($files_value_array['site_logo'], array('jpg','jpeg', 'png', 'gif')))
        ->rule('file', 'Upload::size', array($files_value_array['site_logo'],'2M'))*/ ->rule('site_copyrights', 'not_empty') /*->rule('fare_calculation', 'not_empty') ->rule('site_currency','not_empty')
        ->rule('site_currency', 'Model_Admin::checksite_currency', array(':value',$arr['currency_code']))
        ->rule('currency_code','not_empty') */ /*->rule('price_settings', 'not_empty')->rule('default_unit', 'not_empty')*/->rule('skip_credit_card', 'not_empty')/*->rule('cancellation_fare', 'not_empty')->rule('referral_settings', 'not_empty')->rule('referral_amount', 'not_empty')->rule('referral_amount', 'numeric')->rule('wallet_amount1', 'not_empty')->rule('wallet_amount1', 'numeric')->rule('wallet_amount2', 'not_empty')->rule('wallet_amount2', 'numeric')->rule('wallet_amount3', 'not_empty')->rule('wallet_amount3', 'numeric')->rule('wallet_amount1', 'Model_Admin::compare_wallet_amount1', array(
            ':value',
            $arr['wallet_amount2'],
            $arr['wallet_amount3']
        ))->rule('wallet_amount2', 'Model_Admin::compare_wallet_amount2', array(
            ':value',
            $arr['wallet_amount3']
        ))->rule('wallet_amount_range', 'not_empty')->rule('wallet_amount_range', 'Model_Admin::check_wallet_amount_range', array(
            ':value',
            $arr['wallet_amount_range']
        ))*/->rule('show_map', 'not_empty')->rule('pagination_settings', 'not_empty')/*->rule('airport_parking_charge','not_empty')*/->rule('customer_support', 'not_empty')->rule('customer_support', 'max_length', [
            ':value',
            '30'
        ])->rule('customer_support', 'Model_Admin::_intMobilePattern', [
            ':value'
        ])->rule('grandlimo_video', 'not_empty')->rule('grandlimo_video', 'url')->rule('book_later_time', 'not_empty')->rule('book_later_time', 'numeric')->rule('book_later_time', 'Model_Admin::time_isValid',[':value'])->rule('airport_trip_time', 'not_empty')->rule('airport_trip_time', 'numeric')->rule('airport_trip_time', 'Model_Admin::time_isValid',[':value'])->rule('repeat_trip_time', 'not_empty')->rule('repeat_trip_time', 'numeric')->rule('repeat_trip_time', 'Model_Admin::time_isValid',[':value'])->rule('dispatcher_notification_time', 'not_empty')->rule('dispatcher_notification_time', 'numeric')->rule('dispatcher_notification_time', 'Model_Admin::time_isValid',[':value'])->rule('android_passenger_app_url', 'not_empty')->rule('android_passenger_app_url', 'url')->rule('ios_passenger_app_url', 'not_empty')->rule('ios_passenger_app_url', 'url');
    }
	
	public static function time_isValid($value)
	{
		if ($value == 0) {			
            return false;
        } else {			
			return true;
		}        
	}
	
	public static function _intMobilePattern($value)
	{
		if (preg_match("/^[0-9\+\-\(\)\s]+$/", $value)) {			
            return true;
        } else {			
			return false;
		}        
	}
    /** validating the banners images **/
    public function validate_update_module($arr = "", $files_value_array = "")
    {
        return Validation::factory($arr)
		/*->rule('member', 'not_empty')
        ->rule('member', 'max_length', array(':value', '2'))*/
		->rule('file', 'Upload::not_empty', [
            $files_value_array['banner_image1']
        ])->rule('file', 'Upload::type', [
            $files_value_array['banner_image1'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('file', 'Upload::size', [
            $files_value_array['banner_image1'],
            '2M'
        ])->rule('file', 'Upload::not_empty', [
            $files_value_array['banner_image2']
        ])->rule('file', 'Upload::type', [
            $files_value_array['banner_image2'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('file', 'Upload::size', [
            $files_value_array['banner_image2'],
            '2M'
        ])->rule('file', 'Upload::not_empty', [
            $files_value_array['banner_image3']
        ])->rule('file', 'Upload::type', [
            $files_value_array['banner_image3'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('file', 'Upload::size', [
            $files_value_array['banner_image3'],
            '2M'
        ])->rule('file', 'Upload::not_empty', [
            $files_value_array['banner_image4']
        ])->rule('file', 'Upload::type', [
            $files_value_array['banner_image4'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('file', 'Upload::size', [
            $files_value_array['banner_image4'],
            '2M'
        ])->rule('file', 'Upload::not_empty', [
            $files_value_array['banner_image5']
        ])->rule('file', 'Upload::type', [
            $files_value_array['banner_image5'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('file', 'Upload::size', [
            $files_value_array['banner_image5'],
            '2M'
        ]);
    }
    /** validating the module settings **/
    public function validate_update_module1($arr = "")
    {
        return Validation::factory($arr)->rule('member', 'not_empty')->rule('member', 'max_length', [
            ':value',
            '2'
        ]);
    }
    /** Updating the banner images **/
    public function update_module_settings_images1($image, $id)
    {
        $sql     = "select banner_image1 from " . CMS . " where id='$id'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['banner_image1'])) {
            $id1 = DOCROOT . BANNER_IMGPATH . $results[0]['banner_image1'];
            if (file_exists($id1)) {
                $id1 = BANNER_IMGPATH . $results[0]['banner_image1'];
                unlink($id1);
            }
        }
        if ($id > 0) {
            if (isset($image)) {
                $query = [
                    'banner_image1' => $image,
                    'type' => '2'
                ];
            }
            $result = DB::update(CMS)->set($query)->where('id', '=', $id)->execute();
        } else {
            $result = DB::insert(CMS)->columns([
                'banner_image1',
                'type',
                'status'
            ])->values([
                $image,
                '2',
                '1'
            ])->execute();
            $id     = $result[0];
        }
        return $id;
    }
    public function update_module_settings_images2($image, $id)
    {
        $sql     = "select banner_image2 from " . CMS . " where id='$id'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['banner_image2'])) {
            $id2 = DOCROOT . BANNER_IMGPATH . $results[0]['banner_image2'];
            if (file_exists($id2)) {
                $id2 = BANNER_IMGPATH . $results[0]['banner_image2'];
                unlink($id2);
            }
        }
        if ($id > 0) {
            if (isset($image)) {
                $query = [
                    'banner_image2' => $image,
                    'type' => '2'
                ];
            }
            $result = DB::update(CMS)->set($query)->where('id', '=', $id)->execute();
        } else {
            $result = DB::insert(CMS)->columns([
                'banner_image2',
                'type',
                'status'
            ])->values([
                $image,
                '2',
                '1'
            ])->execute();
        }
        return $result;
    }
    public function update_module_settings_images3($image, $id)
    {
        $sql     = "select banner_image3 from " . CMS . " where id='$id'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['banner_image3'])) {
            $id3 = DOCROOT . BANNER_IMGPATH . $results[0]['banner_image3'];
            if (file_exists($id3)) {
                $id3 = BANNER_IMGPATH . $results[0]['banner_image3'];
                unlink($id3);
            }
        }
        if ($id > 0) {
            if (isset($image)) {
                $query = [
                    'banner_image3' => $image,
                    'type' => '2'
                ];
            }
            $result = DB::update(CMS)->set($query)->where('id', '=', $id)->execute();
        } else {
            $result = DB::insert(CMS)->columns([
                'banner_image3',
                'type',
                'status'
            ])->values([
                $image,
                '2',
                '1'
            ])->execute();
        }
        return $result;
    }
    public function update_module_settings_images4($image, $id)
    {
        $sql     = "select banner_image4 from " . CMS . " where id='$id'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['banner_image4'])) {
            $id4 = DOCROOT . BANNER_IMGPATH . $results[0]['banner_image4'];
            if (file_exists($id4)) {
                $id4 = BANNER_IMGPATH . $results[0]['banner_image4'];
                unlink($id4);
            }
        }
        if ($id > 0) {
            if (isset($image)) {
                $query = [
                    'banner_image4' => $image,
                    'type' => '2'
                ];
            }
            $result = DB::update(CMS)->set($query)->where('id', '=', $id)->execute();
        } else {
            $result = DB::insert(CMS)->columns([
                'banner_image4',
                'type',
                'status'
            ])->values([
                $image,
                '2',
                '1'
            ])->execute();
        }
        return $result;
    }
    public function update_module_settings_images5($image, $id)
    {
        $sql     = "select banner_image5 from " . CMS . " where id='$id'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['banner_image5'])) {
            $id5 = DOCROOT . BANNER_IMGPATH . $results[0]['banner_image5'];
            if (file_exists($id5)) {
                $id5 = BANNER_IMGPATH . $results[0]['banner_image5'];
                unlink($id5);
            }
        }
        if ($id > 0) {
            if (isset($image)) {
                $query = [
                    'banner_image5' => $image,
                    'type' => '2'
                ];
            }
            $result = DB::update(CMS)->set($query)->where('id', '=', $id)->execute();
        } else {
            $result = DB::insert(CMS)->columns([
                'banner_image5',
                'type',
                'status'
            ])->values([
                $image,
                '2',
                '1'
            ])->execute();
        }
        return $result;
    }
    /** Updating the module settings **/
    public function update_module_settings($post, $count)
    {
        if ($count <= 5) {
            $sql    = "select * from " . CMS . " where `order`!=0";
            $res    = Db::query(Database::SELECT, $sql)->execute();
            $count1 = count($res);
            if (isset($post['member0'])) {
                if ($count1 > 0) {
                    $query = [
                        'content' => $post['member0'],
                        'alt_tags' => $post['tags1'],
                        'type' => '3',
                        'status' => '1',
                        'order' => '1'
                    ];
                    $rs    = DB::update(CMS)->set($query)->where('order', '=', '1')->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                } else {
                    $rs = DB::insert(CMS)->columns([
                        'content',
                        'alt_tags',
                        'type',
                        'status',
                        'order'
                    ])->values([
                        $post['member0'],
                        $post['tags1'],
                        '3',
                        '1',
                        '1'
                    ])->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                }
            }
            if (isset($post['member1'])) {
                if ($count1 > 0) {
                    $query = [
                        'content' => $post['member1'],
                        'alt_tags' => $post['tags2'],
                        'type' => '3',
                        'status' => '1',
                        'order' => '2'
                    ];
                    $rs    = DB::update(CMS)->set($query)->where('order', '=', '2')->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                } else {
                    $rs = DB::insert(CMS)->columns([
                        'content',
                        'alt_tags',
                        'type',
                        'status',
                        'order'
                    ])->values([
                        $post['member1'],
                        $post['tags2'],
                        '3',
                        '1',
                        '2'
                    ])->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                }
            }
            if (isset($post['member2'])) {
                if ($count1 > 0) {
                    $query = [
                        'content' => $post['member2'],
                        'alt_tags' => $post['tags3'],
                        'type' => '3',
                        'status' => '1',
                        'order' => '3'
                    ];
                    $rs    = DB::update(CMS)->set($query)->where('order', '=', '3')->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                } else {
                    $rs = DB::insert(CMS)->columns([
                        'content',
                        'alt_tags',
                        'type',
                        'status',
                        'order'
                    ])->values([
                        $post['member2'],
                        $post['tags3'],
                        '3',
                        '1',
                        '3'
                    ])->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                }
            }
            if (isset($post['member3'])) {
                if ($count1 > 0) {
                    $query = [
                        'content' => $post['member3'],
                        'alt_tags' => $post['tags4'],
                        'type' => '3',
                        'status' => '1',
                        'order' => '4'
                    ];
                    $rs    = DB::update(CMS)->set($query)->where('order', '=', '4')->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                } else {
                    $rs = DB::insert(CMS)->columns([
                        'content',
                        'alt_tags',
                        'type',
                        'status',
                        'order'
                    ])->values([
                        $post['member3'],
                        $post['tags4'],
                        '3',
                        '1',
                        '4'
                    ])->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                }
            }
            if (isset($post['member4'])) {
                if ($count1 > 0) {
                    $query = [
                        'content' => $post['member4'],
                        'alt_tags' => $post['tags5'],
                        'type' => '3',
                        'status' => '1',
                        'order' => '5'
                    ];
                    $rs    = DB::update(CMS)->set($query)->where('order', '=', '5')->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                } else {
                    $rs = DB::insert(CMS)->columns([
                        'content',
                        'alt_tags',
                        'type',
                        'status',
                        'order'
                    ])->values([
                        $post['member4'],
                        $post['tags5'],
                        '3',
                        '1',
                        '5'
                    ])->execute();
                    // Checked the updated query status isset
                    if ($rs == 1) {
                        $update_sstatus = $rs;
                    }
                }
            }
            if (isset($update_sstatus)) {
                return $update_sstatus;
            } else {
                return 0;
            }
        }
    }
    /** site logo **/
    public function updatesiteinfo_image($image)
    {
        $query  = [
            'site_logo' => $image
        ];
        //$result = DB::update(SITEINFO)->set($query)->where('id', '=', '1')->execute();
        //MongoDB
        $result = $this->mongo_db->update(MDB_SITEINFO, [
            '_id' => 1
        ], [
            '$set' => $query
        ], [
            'upsert' => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
    /** site email logo **/
    public function updatesite_email_einfo_image($update_query)
    {
       /* $query  = array(
            'email_site_logo' => $image
        );*/
        //$result = DB::update(SITEINFO)->set($query)->where('id', '=', '1')->execute();
        //MongoDB
        $result = $this->mongo_db->update(MDB_SITEINFO, [
            '_id' => 1
        ], [
            '$set' => $update_query
        ], [
            'upsert' => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
	
	public function updatesite_video($videoname)
    {
		$results = $this->mongo_db->find_one(MDB_SITEINFO, [
            '_id' => 1
        ], [
            'version'
        ]);
		$newversion = $results['version'] + 0.1;
		
        $query  = [
            'tab_video' => $videoname,
			'version' => $newversion
        ];
        //$result = DB::update(SITEINFO)->set($query)->where('id', '=', '1')->execute();
        //MongoDB
        $result = $this->mongo_db->update(MDB_SITEINFO, [
            '_id' => 1
        ], [
            '$set' => $query
        ], [
            'upsert' => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
    /** site favicon image **/
    public function updatesiteinfo_faviconimage($image)
    {
        /*$sql     = "select site_favicon from " . SITEINFO . " where id='1'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        //MongoDB
        $results = $this->mongo_db->find_one(MDB_SITEINFO, [
            '_id' => 1
        ], [
            'site_favicon'
        ]);
        if (!empty($results['site_favicon'])) {
            $id1 = DOCROOT . SITE_FAVICON_IMGPATH . $results['site_favicon'];
            if (file_exists($id1)) {
                unlink($id1);
            }
        }
        $query  = [
            'site_favicon' => $image
        ];
        //$result = DB::update(SITEINFO)->set($query)->where('id', '=', '1')->execute();
        //MongoDB
        $result = $this->mongo_db->update(MDB_SITEINFO, [
            '_id' => 1
        ], [
            '$set' => $query
        ], [
            'upsert' => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
    public function updatesiteinfo($post_value_array)
    {
        $phone = str_replace(' ','', $post_value_array['phone_number']);
        $customer = str_replace(' ','', $post_value_array['customer_support']);
	$query  = [
            'app_name' => $post_value_array['app_name'],
            'app_description' => $post_value_array['app_description'],
            'email_id' => $post_value_array['contact_email'],
            'phone_number' => $phone,
            'meta_keyword' => $post_value_array['meta_keyword'],
            'meta_description' => $post_value_array['meta_description'],
            'show_map' => $post_value_array['show_map'],
            'site_tagline' => $post_value_array['site_tagline'],
            'site_copyrights' => $post_value_array['site_copyrights'],
            'notification_settings' => $post_value_array['notification_settings'],
            'pagination_settings' => $post_value_array['pagination_settings'],
            //'tell_to_friend_message' => $post_value_array['tell_to_friend_message'],
            //'admin_commission' => $post_value_array['admin_commission'],
           // 'tax' => $post_value_array['tax'],
            'sms_enable' => $post_value_array['sms_enable'],
            //'default_unit' => $post_value_array['default_unit'],
            'skip_credit_card' => $post_value_array['skip_credit_card'],
           // 'cancellation_fare_setting' => $post_value_array['cancellation_fare'],
            //'fare_calculation_type' => $post_value_array['fare_calculation'],
           // 'price_settings' => $post_value_array['price_settings'],
            /*'referral_settings' => $post_value_array['referral_settings'],
            'referral_amount' => $post_value_array['referral_amount'],
            'wallet_amount1' => $post_value_array['wallet_amount1'],
            'wallet_amount2' => $post_value_array['wallet_amount2'],
            'wallet_amount3' => $post_value_array['wallet_amount3'],
            'wallet_amount_range' => $post_value_array['wallet_amount_range'],
            'airport_parking_charge' => $post_value_array['airport_parking_charge'],*/
            'twilio_accout_sid' => $post_value_array['twilio_accout_sid'],
            'twilio_auth_token' => $post_value_array['twilio_auth_token'],
            'twilio_number' => $post_value_array['twilio_number'],
            'grandlimo_video' => $post_value_array['grandlimo_video'],
            'customer_support' => $customer,
            'continuous_request_time' => $post_value_array['continuous_request_time'],
            'book_later_time' => (int) $post_value_array['book_later_time'],
	        'book_now_time' => (int) $post_value_array['book_now_time'],
            'repeat_trip_time' => (int) $post_value_array['repeat_trip_time'],
            'airport_trip_time' => (int) $post_value_array['airport_trip_time'],
			'android_passenger_app_url' => $post_value_array['android_passenger_app_url'],
			'ios_passenger_app_url' => $post_value_array['ios_passenger_app_url'],
 'airport_drop_of' => (int)$post_value_array['airport_drop_of'],
            'airport_pick_up' => (int)$post_value_array['airport_pick_up'],
            'max_fare_est' => (int)$post_value_array['max_fare_est'],
'dispatcher_notification_time' => (int) $post_value_array['dispatcher_notification_time'],
        'smsbox_username' => $post_value_array['smsbox_username'],
        'smsbox_password' => $post_value_array['smsbox_password'],
        'smsbox_customerid' => $post_value_array['smsbox_customerid'],
        'smsbox_senderid' => $post_value_array['smsbox_senderid'],

            
        ];
        //$result = DB::update(SITEINFO)->set($query)->where('id', '=', '1')->execute();
        //echo $result; exit;
        //MongoDB
		$cquery  = [
            'companyinfo.company_phone_number' => $phone];
		$cresult = $this->mongo_db->update(MDB_COMPANY, [
            '_id' => 1
        ], [
            '$set' => $cquery
        ], [
            "upsert" => true
        ]);
		
        $result = $this->mongo_db->update(MDB_SITEINFO, [
            '_id' => 1
        ], [
            '$set' => $query
        ], [
            "upsert" => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
    public function validate_update_socialinfo($arr = "")
    {
        return Validation::factory($arr)->rule('facebook_key', 'not_empty')->rule('facebook_secretkey', 'not_empty')->rule('facebook_share', 'not_empty')->rule('twitter_share', 'not_empty')->rule('google_share', 'not_empty')->rule('linkedin_share', 'not_empty')->rule('facebook_share', 'url')->rule('twitter_share', 'url')->rule('google_share', 'url')->rule('linkedin_share', 'url');
    }
    public function update_socialinfo($post_value_array)
    {
        $query  = [
            'facebook_key' => $post_value_array['facebook_key'],
            'facebook_secretkey' => $post_value_array['facebook_secretkey'],
            'facebook_share' => $post_value_array['facebook_share'],
            'twitter_share' => $post_value_array['twitter_share'],
            'google_share' => $post_value_array['google_share'],
            'linkedin_share' => $post_value_array['linkedin_share']
        ];
        // $result = DB::update(SITEINFO)->set($query)->where('id', '=', '1')->execute();
        //MongoDB
        $result = $this->mongo_db->update(MDB_SITEINFO, [
            '_id' => 1
        ], [
            '$set' => $query
        ], [
            "upsert" => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
    public function validate_update_payment_submit($arr = "")
    {
        return Validation::factory($arr)
		->rule('payment_gatway_name', 'not_empty')
		->rule('description', 'not_empty')
		->rule('currency_code', 'not_empty')
		->rule('currency_code', 'max_length', [
            ':value',
            '3'
        ])->rule('currency_symbol', 'not_empty')->rule('currency_symbol', 'max_length', [
            ':value',
            '1'
        ])->rule('payment_method', 'not_empty')
		->rule('paypal_api_username', 'not_empty')
		->rule('paypal_api_password', 'not_empty')
		->rule('paypal_api_signature', 'not_empty');
    }
    public function check_array($value = "")
    {
        if (!empty($value)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_payment_submit($post_value_array)
    {
        /*$query = array('payment_gatway' => $post_value_array['payment_gatway_name'],
        'description' => $post_value_array['description'],
        'currency_code' => $post_value_array['currency_code'],
        'currency_symbol' => $post_value_array['currency_symbol'],
        'payment_method' => $post_value_array['payment_method'],
        'paypal_api_username' => $post_value_array['paypal_api_username'],
        'paypal_api_password' => $post_value_array['paypal_api_password'],
        'paypal_api_signature' => $post_value_array['paypal_api_signature']);
        
        $result =  DB::update(PAYMENT_GATEWAYS)->set($query)
        ->where('id', '=' ,'1')
        ->execute(); */
		
        $update = 0;
        foreach ($post_value_array['payid'] as $k => $id) {
            if ($id == $post_value_array['default'][0]) {
                $default = 1;
            } else {
                $default = 0;
            }
            if (in_array($id, $post_value_array['paymodstatus'])) {
                $paystatus = 1;
            } else {
                $paystatus = 0;
            }
            /*$update_result = DB::update(PAYMENT_MODULES)->set(array(
                'pay_mod_active' => $paystatus,
                'pay_mod_default' => $default
            ))->where('pay_mod_id', '=', $id)->execute();
			if (($update_result == 1) && ($update == 0)) {
                $result = 1;
            } else {
                $result = 0;
            } */
			
			//MongoDB
			$payment_modules_data = [
                'pay_mod_active' => $paystatus,
                'pay_mod_default' => (int)$default
            ];
			$pay_result = $this->mongo_db->update(MDB_PAYMENT_MODULES,['_id'=>(int)$id],['$set'=>$payment_modules_data],['upsert'=>true]);
            
        }
        return 1;
    }
    public function admin_payment_submit($post_value_array, $id)
    {
        $query  = [
            'payment_gatway' => $post_value_array['payment_gatway_name'],
            'description' => $post_value_array['description'],
            'currency_code' => $post_value_array['currency_code'],
            'currency_symbol' => $post_value_array['currency_symbol'],
            'payment_method' => $post_value_array['payment_method'],
            'paypal_api_username' => $post_value_array['paypal_api_username'],
            'paypal_api_password' => $post_value_array['paypal_api_password'],
            'paypal_api_signature' => $post_value_array['paypal_api_signature']
        ];
        $result = DB::update(PAYMENT_GATEWAYS)->set($query)->where('id', '=', $id)->execute();
        return count($result);
    }
    public function site_payment_gateways($id)
    {
        /*$result = DB::select()->from(PAYMENT_GATEWAYS)->where('id', '=', '1')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_PAYMENT_GATEWAYS,['_id'=>(int)$id]);
		return (!empty($result))?$result:[];
    }
	//To Get all payment modules
	public function payment_modules()
	{
		/*$query2 = "SELECT * FROM ".PAYMENT_MODULES." order by pay_mod_id asc";
		$result = Db::query(Database::SELECT, $query2)->execute()->as_array();
		//print_r($result);exit;*/
		
		//MongoDB
		$result = $this->mongo_db->find(MDB_PAYMENT_MODULES,[],[])->sort(['_id'=>1]);
		//echo '<pre>';print_r(iterator_to_array($result));exit;
		return (!empty($result))?iterator_to_array($result):[];
	}
    public function get_payment_gateways($offset, $val,$find_count=false)
    {
		/*if($find_count){
			$result = DB::select()->from(PAYMENT_GATEWAYS)->where('payment_status', '!=', 'T')->where('company_id', '=', '0')->execute()->as_array();
			return count($result);
		} else {
			$result = DB::select()->from(PAYMENT_GATEWAYS)->where('payment_status', '!=', 'T')->where('company_id', '=', '0')->limit($val)->offset($offset)->execute()->as_array();
		return $result;
		}*/
		
		//MongoDB
		if($find_count){
			$result = $this->mongo_db->count(MDB_PAYMENT_GATEWAYS,['payment_status'=>['$ne'=>'T'],'company_id'=>1]);
			return $result;
		} else {
			$result = $this->mongo_db->find(MDB_PAYMENT_GATEWAYS,['payment_status'=>['$ne'=>'T'],'company_id'=>1])->skip($offset)->limit($val);
			return (!empty($result))?iterator_to_array($result):[];
		}
    }
    public function get_payment_gateway_detail($id)
    {
        $result = DB::select()->from(PAYMENT_GATEWAYS)->where('id', '=', $id)->execute()->as_array();
        return $result;
    }
    /** update default country status **/
    public function update_default_payment($id)
    {
        /*$payment_status = DB::select()->from(PAYMENT_GATEWAYS)->where('id', '=', $id)->execute();
        if ($payment_status[0]['payment_status'] == 'A') {
            $result = DB::update(PAYMENT_GATEWAYS)->set(array(
                'default_payment_gateway' => '1'
            ))->where('id', '=', $id)->execute();
            if ($result == 1) {
                $result1 = DB::update(PAYMENT_GATEWAYS)->set(array(
                    'default_payment_gateway' => '0'
                ))->where('id', '!=', $id)->where('company_id', '=', '0')->execute();
            }
            return $result;
        } else {
            return -1;
        }*/
		
		//MongoDB
		$pid = (int)$id;
		$gateway = $this->mongo_db->find_one(MDB_PAYMENT_GATEWAYS,['_id'=>$pid],['payment_status']);
		if(!empty($gateway['payment_status']) && $gateway['payment_status']=='A'){
			//update default status with 1
			$res = $this->mongo_db->update(MDB_PAYMENT_GATEWAYS,['_id'=>$pid],['$set'=>['default_payment_gateway' => 1]],['upsert'=>true]);
			//update default status with 0
			if(empty($res['err'])){
				$result = $this->mongo_db->update(MDB_PAYMENT_GATEWAYS,['_id'=>['$ne'=>$pid],'company_id'=>0,'default_payment_gateway'=>1],['$set'=>['default_payment_gateway' => 0]],['multiple'=>true]);
			}
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return -1;
		}
    }
    public function mail_settings()
    {
        //$result = DB::select()->from(SMTP_SETTINGS)->where('id', '=', 1)->execute()->as_array();
        //MongoDB
        $res    = $this->mongo_db->find_one(MDB_SMTP_SETTINGS, [
            '_id' => 1
        ]);
        $result = [];
        foreach ($res as $keys => $values) {
            $result[0][$keys] = $values;
        }
        return $result;
    }
    public function sms_template()
    {
        //$result = DB::select()->from(SMS_TEMPLATE)->order_by('sms_id')->execute()->as_array();
        //MongoDB
        $response = $this->mongo_db->find(MDB_SMS_TEMPLATES)->sort([
            '_id' => 1
        ]);
        $result   = iterator_to_array($response);
        return $result;
    }
    public function validate_mailsettings($arr = "")
    {
        return Validation::factory($arr)->rule('smtp_host', 'not_empty')->rule('smtp_host', 'max_length', [
            ':value',
            '50'
        ])->rule('smtp_port', 'not_empty')->rule('smtp_port', 'numeric')->rule('smtp_port', 'max_length', [
            ':value',
            '4'
        ])->rule('smtp_username', 'not_empty')->rule('smtp_username', 'email')->rule('smtp_username', 'max_length', [
            ':value',
            '50'
        ])->rule('smtp_password', 'not_empty')->rule('smtp_password', 'max_length', [
            ':value',
            '50'
        ])->rule('transport_layer_security', 'not_empty')->rule('smtp', 'not_empty');
    }
    public function updatemailsetting($post_value_array)
    {
        $query  = [
            'smtp_host' => $post_value_array['smtp_host'],
            'smtp_port' => $post_value_array['smtp_port'],
            'smtp_username' => $post_value_array['smtp_username'],
            'smtp_password' => $post_value_array['smtp_password'],
            'transport_layer_security' => $post_value_array['transport_layer_security'],
            'smtp' => $post_value_array['smtp']
        ];
        //$result = DB::update(SMTP_SETTINGS)->set($query)->where('id', '=', '1')->execute();
        //MongoDB
        $result = $this->mongo_db->update(MDB_SMTP_SETTINGS, [
            '_id' => 1
        ], [
            '$set' => $query
        ], [
            'upsert' => true
        ]);
        return (empty($result['err'])) ? 1 : $result['err'];
    }
    public function get_activeusers_list()
    {
        /*$results = DB::select()->from(PASSENGERS)->where('login_status', '=', 'A')->order_by('last_login', 'desc')->limit('0,10')->execute()->as_array();
        return $results;*/
	
		$arguments = [
			[
				'$match' => ['login_status' => 'A']
			],
			[
				'$project' => [
					'name' => '$name',
					'last_login' => '$last_login',
					'phone' => '$phone',
					'address' => '$address'
				]
			],
			['$skip' => 0],
			['$limit' => 10]
		];
		$result          = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
		echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
    //get all active users list
    public function get_all_activeusers_list($cid = 0)
    {
        /*$results = DB::select()->from(PASSENGERS)
        ->where('login_status', '=', 'A')
        ->order_by('last_login','desc')
        ->execute()
        ->as_array();*/
        /*$condition = "";
        if (!empty($cid)) {
            $condition = " and " . PASSENGERS . ".passenger_cid='$cid'";
        }
        $sql     = "select * from " . PASSENGERS . " where " . PASSENGERS . ".login_status='A' $condition order by " . PASSENGERS . ".last_login desc";
        //echo $sql;exit;
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $results;*/
		
		$match_array = [];
		$match_array['login_status']= 'A';
		if (!empty($cid) && $cid!=0) {
			$match_array['passenger_cid']= (int)$cid;
		}
		$results = $this->mongo_db->find(MDB_PASSENGERS,$match_array)->sort(['last_login'=>-1]);
		return (!empty($results))?iterator_to_array($results):[];
    }
	
    //dashboard active users count
    public function get_activeusers_list_count($cid = 1)
    {
		
		if (!empty($cid)) {
			$condition = ['login_status' => 'A','passenger_cid' => (int)$cid];
        }else{
			$condition = ['login_status' => 'A'];
		}
		$result = $this->mongo_db->count(MDB_PASSENGERS,$condition,['_id']);
		return $result;
    }
	
    //get all active user list
    public function all_users_list($offset = '', $val = '', $cid = 0,$find_count=false)
    {
		$match_array = [];
		$match_array['login_status']= 'A';
		if (!empty($cid) && $cid!=0) {
			$match_array['passenger_cid']= (int)$cid;
		}
		if($find_count==TRUE){
			$result = $this->mongo_db->count(MDB_PASSENGERS,$match_array,['_id']);
			//echo $result; exit;
			return $result;
		}else{
			$selected_fields = ['_id','name','last_login','phone', 'address'];
			$results = $this->mongo_db->find(MDB_PASSENGERS,$match_array,$selected_fields)->sort(['last_login'=>-1])->skip((int)$offset)->limit((int)$val);
			//echo "<pre>"; print_r(iterator_to_array($results)); exit;
			return (!empty($results))?iterator_to_array($results):[];	
		}
    }
    public function get_availabletaxi_list()
    {
        $currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
        $query_where = " AND ( ( '$currentdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        $query       = " select * from " . TAXIMAPPING . " left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id left join " . DRIVER . " on " . TAXIMAPPING . ".mapping_driverid =" . DRIVER . ".driver_id where " . TAXIMAPPING . ".mapping_status = 'A'  and " . DRIVER . ".status='F' and " . COMPANY . ".company_status='A' and " . COUNTRY . ".country_status='A' and " . STATE . ".state_status='A' and " . CITY . ".city_status='A' and " . TAXI . ".taxi_status='A' and " . TAXI . ".taxi_availability='A' and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and people.user_type='D' $query_where order by mapping_startdate ASC limit 0,10 ";
        $results     = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
	
   /* public function get_availabletaxi_list_count()
    {
        $currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
        $query_where = " AND ( ( '$currentdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        $query       = " select * from " . TAXIMAPPING . "
        left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id
        left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid
        left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id
        left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id
        left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id
        left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id
        left join " . DRIVER . " on " . TAXIMAPPING . ".mapping_driverid =" . DRIVER . ".driver_id
        
        where " . TAXIMAPPING . ".mapping_status = 'A'  and " . DRIVER . ".status='F' and " . COMPANY . ".company_status='A' and " . COUNTRY . ".country_status='A' and " . STATE . ".state_status='A' and " . CITY . ".city_status='A' and " . TAXI . ".taxi_status='A' and " . TAXI . ".taxi_availability='A' and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and people.user_type='D' $query_where order by mapping_startdate ASC ";
        $results     = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    } */
	
	public function get_availabletaxi_list_count()
    {
		$currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
		$match_query = [];
		$match_query['mapping.mapping_status'] = 'A';
		$match_query['driver.status'] = 'A';
		$match_query['company.companydetails.company_status'] = 'A';
		$match_query['country_status'] = 'A';
		$match_query['stateinfo.state_status'] = 'A';
		$match_query['stateinfo.cityinfo.city_status'] = 'A';
		$match_query['taxi.taxi_status'] = 'A';
		$match_query['taxi.taxi_availability'] = 'A';
		$match_query['people.status'] = 'A';
		$match_query['people.availability_status'] = 'A';
		
		$match_query['people.login_city'] = 1;
		if ($currentdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = ['$gte' => $currentdate];
			$match_query['mapping.mapping_enddate'] = ['$lt' => $enddate];
		}
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'mapping_countryid',
					'foreignField' => 'mapping_cityid',
					'as' => 'mapping'
				]
			],
			[
				'$unwind' => '$mapping'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI,
					'localField' => 'mapping.mapping_taxiid',
					'foreignField' => '_id',
					'as' => 'taxi'
				]
			],
			[
				'$unwind' => '$taxi'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'mapping.mapping_companyid',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			[
				'$match' => $match_query
			],
			[
				'$project' => [
					'result' => '$mapping._id'
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
		$result          = $this->mongo_db->aggregate(MDB_CSC, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
    public function get_comapny_countlist()
    {
        /*echo DB::select()->from(COMPANY)
        ->join(PEOPLE)->on(PEOPLE.'.id', '=' ,COMPANY.'.userid')
        //->where(PEOPLE.'.company_id', '=' ,COMPANY.'.cid')
        ->where(PEOPLE.'.status', '=', 'A');exit;*/
        $results = DB::select('cid')->from(COMPANY)->join(PEOPLE)->on(PEOPLE . '.id', '=', COMPANY . '.userid')
        //->where(PEOPLE.'.company_id', '=' ,COMPANY.'.cid')
            ->where(PEOPLE . '.status', '=', 'A')->execute();
        return count($results);
    }
    public function get_passenger_countlist()
    {
        $results = DB::select('id')->from(PEOPLE)->where('user_type', '=', 'N')->where('account_type', '=', '2')->where('status', '=', 'A')->execute();
        return count($results);
    }
    public function count_passenger_list_history()
    {
        $rs = DB::select('id')->from(PASSENGERS)->where('user_status', '=', 'A')->order_by('created_date', 'desc')->execute()->as_array();
        return count($rs);
    }
    public function get_drivers_countlist()
    {
        $results = DB::select('id')->from(PEOPLE)
        //->join(TAXIMAPPING,'LEFT')->on(PEOPLE.'.id', '=' ,TAXIMAPPING.'.mapping_driverid')
            ->where(PEOPLE . '.user_type', '=', 'D')->where(PEOPLE . '.status', '=', 'A')
        //->where(TAXIMAPPING.'.mapping_status', '=', 'A')
            ->where(PEOPLE . '.id', '<>', '')->execute();
        return count($results);
    }
    public function get_taxi_countlist()
    {
        $results = DB::select('taxi_id')->from(TAXI)->execute();
        return count($results);
    }
	
	public function free_taxi_list($find_count = false, $cid = 0)
    {
		$usertype       = $this->usertype;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$match_query = $taxi_list = [];
		$match_query['taxi_status'] = 'A';
		$match_query['taxi_availability'] = 'A';
		$booked_driver = $this->free_availabletaxi_list();
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list[] = (int)$value['id'];
            }
			$match_query['_id'] = ['$nin' => $taxi_list];
        }
        if (!empty($cid)) {
			$match_query['taxi_company'] = (int)$cid;
        }
        //if ($usertype == 'M') {
			$match_query['taxi_country'] = (int)$country_id;
			$match_query['taxi_state'] = (int)$state_id;
			$match_query['taxi_city'] = (int)$city_id;
        //}
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = [
            [
                '$match' => $match_query
            ],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			
		];
		if($find_count == TRUE){
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$arguments = array_merge($common_arguments,$count_arguments);
			$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		}else{
			$field_arguments = [
				[
					'$project' => [
						'taxi_id' => '$_id',
						'taxi_no' => '$taxi_no',
						'cid' => '$company._id',
						'company_name' => '$company.companydetails.company_name'
						
					]
				],
				[
					'$sort' => ['_id' => 1]
				],
			];
			$arguments = array_merge($common_arguments,$field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
		}
	}
    /*public function free_taxi_list($cid = 0)
    {
        $usertype      = $this->session->get('user_type');
        $country_id    = $this->session->get('country_id');
        $state_id      = $this->session->get('state_id');
        $city_id       = $this->session->get('city_id');
        $booked_driver = $this->free_availabletaxi_list();
        $taxi_list     = "";
        $condition     = "";
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list .= "'" . $value['taxi_id'] . "',";
            }
            $taxi_list = rtrim($taxi_list, ',');
            $condition = "and " . TAXI . ".taxi_id NOT IN ($taxi_list)";
        }
        $companyCond = "";
        if (!empty($cid)) {
            $companyCond = " and " . TAXI . ".taxi_company = '$cid'";
        }
        if ($usertype == 'M') {
            $companyCond .= " and " . TAXI . ".taxi_country='$country_id' and " . TAXI . ".taxi_state='$state_id' and " . TAXI . ".taxi_city='$city_id'";
        }
        $sql    = "select * from " . TAXI . " JOIN " . COMPANY . " ON " . TAXI . ".taxi_company = company.cid where " . TAXI . ".taxi_status='A' and  " . TAXI . ".taxi_availability='A' $condition $companyCond order by " . TAXI . ".taxi_id asc limit 0,10";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function free_taxi_list_all()
    {
        $booked_driver = $this->free_availabletaxi_list();
        $taxi_list     = "";
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list .= "'" . $value['taxi_id'] . "',";
            }
            $taxi_list = rtrim($taxi_list, ',');
        }
        $sql    = "select * from " . TAXI . " JOIN " . COMPANY . " ON " . TAXI . ".taxi_company = company.cid where " . TAXI . ".taxi_status='A' and  " . TAXI . ".taxi_availability='A'  and " . TAXI . ".taxi_id NOT IN ($taxi_list) order by " . TAXI . ".taxi_id asc";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }*/
	
	
	public function free_taxi_list_all_pag($offset, $val, $cid = 0,$find_count=false)
    {
        $usertype       = $this->usertype;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$match_query = $taxi_list = [];
		$match_query['taxi_status'] = 'A';
		$match_query['taxi_availability'] = 'A';
		$booked_driver = $this->free_availabletaxi_list();
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list[] = (int)$value['id'];
            }
			$match_query['_id'] = ['$nin' => $taxi_list];
        }
        if (!empty($cid) && $cid!=0) {
			$match_query['taxi_company'] = (int)$cid;
        }
        if ($usertype == 'M') {
			$match_query['taxi_country'] = (int)$country_id;
			$match_query['taxi_state'] = (int)$state_id;
			$match_query['taxi_city'] = (int)$city_id;
        }
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = [
            [
                '$match' => $match_query
            ],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			
		];
		if($find_count == TRUE){
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$arguments = array_merge($common_arguments,$count_arguments);
			$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		}else{
			$field_arguments = [
				[
					'$project' => [
						'taxi_id' => '$_id',
						'taxi_no' => '$taxi_no',
						'cid' => '$company._id',
						'company_name' => '$company.companydetails.company_name'
						
					]
				],
				[
					'$sort' => ['_id' => 1]
				],
				[
					'$skip' => $offset
				],
				[
					'$limit' => (int)$val
				],
			];
			$arguments = array_merge($common_arguments,$field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
		}
		
			
	}
	
    /*public function free_taxi_list_all_pag($offset, $val, $cid = 0)
    {
        $usertype      = $this->session->get('user_type');
        $country_id    = $this->session->get('country_id');
        $state_id      = $this->session->get('state_id');
        $city_id       = $this->session->get('city_id');
        $booked_driver = $this->free_availabletaxi_list();
        $taxi_list     = "";
        $taxiCond      = "";
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list .= "'" . $value['taxi_id'] . "',";
            }
            $taxi_list = rtrim($taxi_list, ',');
            $taxiCond  = " and " . TAXI . ".taxi_id NOT IN ($taxi_list)";
        }
        $companyCond = "";
        if (!empty($cid)) {
            $companyCond = " and " . TAXI . ".taxi_company = '$cid'";
        }
        if ($usertype == 'M') {
            $companyCond .= " and " . TAXI . ".taxi_country='$country_id' and " . TAXI . ".taxi_state='$state_id' and " . TAXI . ".taxi_city='$city_id'";
        }
        $sql    = "select * from " . TAXI . " JOIN " . COMPANY . " ON " . TAXI . ".taxi_company = company.cid where " . TAXI . ".taxi_status='A' and  " . TAXI . ".taxi_availability='A' $companyCond $taxiCond order by " . TAXI . ".taxi_id asc limit $offset,$val";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    } */
	
    public function free_driver_list()
    {
        $assigned_driver = $this->free_availabletaxi_list();
        $driver_list     = '';
        $condition       = "";
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list .= "'" . $value['id'] . "',";
            }
            $driver_list = rtrim($driver_list, ',');
            $condition   = "and " . PEOPLE . ".id NOT IN ($driver_list)";
        }
        $sql    = "select * from " . PEOPLE . " JOIN " . COMPANY . " ON " . PEOPLE . ".company_id = company.cid where " . PEOPLE . ".user_type='D'  and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' $condition order by " . PEOPLE . ".id asc limit 0,10";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
	
	public function free_driver_list_count()
    {
		$assigned_driver = $this->free_availabletaxi_list();
		//echo '<pre>';
		//print_r($assigned_driver);exit;
		$match_query = $driver_list = [];
		$match_query['user_type'] = 'D';
		$match_query['status'] = 'A';
		$match_query['availability_status'] = 'A';
		$match_query['company_id'] = COMPANY_CID;
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list[] = (int)$value['id'];
            }
			$match_query['_id'] = ['$nin' => $driver_list];
        }
		
		//echo "<pre>"; print_r($match_query);// exit;
		$arguments = [
            [
                '$match' => $match_query
            ],
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
				'$project' => [
					'result' => '$_id'
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
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
	
    public function free_availabletaxi_list()
    {
		$company_id  = $this->session->get('company_id');
		$cuurentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
		$match_query = [];
		$match_query['people.status'] = 'A';
		$match_query['mapping.mapping_status'] = 'A';
		if ($company_id!="" && $company_id!=0) {
			$match_query['taxi_company'] = (int)$company_id;
		}
		/*if ($cuurentdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = array('$gte' => $cuurentdate);
			$match_query['mapping.mapping_enddate'] = array('$lt' => $enddate);
		}*/
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = [
			[
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => '_id',
					'foreignField' => 'mapping_taxiid',
					'as' => 'mapping'
				]
			],
			[
				'$unwind' => '$mapping'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$match' => $match_query
			],
			[
				'$project' => [
					'id' => '$people._id',
					'taxi_id' => '$_id'
				]
			],
			[
				'$skip' => 0
			],
			[
				'$limit' => 10
			],
		];
		$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>"; print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
    }
    /** selecting the banner image for module settings **/
    public function site_module_settings()
    {
        $sql     = "select id,banner_image1,banner_image2,banner_image3,banner_image4,banner_image5 from " . CMS . " where type='2' and status='1'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $results;
    }
    /** selecting the tag descriptions for module settings **/
    public function site_info_settings()
    {
        $sql     = "select content,alt_tags from " . CMS . " where type='3' and status='1' order by `order` ASC";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $results;
    }
    /** validate the menu settings  **/
    public function validate_update_menusettings($arr = "")
    {
        return Validation::factory($arr)->rule('menu_name', 'not_empty')->rule('menu_link', 'not_empty');
        //->rule('status_post','not_empty');
    }
    /** validate the menu settings  **/
    public function validate_update_menusettings1($arr = "")
    {
        return Validation::factory($arr)->rule('menu_name1', 'not_empty')->rule('menu_link1', 'not_empty');
        //->rule('status_post','not_empty');
    }
    /** insert the menu settings  **/
    public function insert_menusettings($post)
    {
        $count = count($post['cnt_contact']);
        if ($count > 0) {
            for ($i = 0; $i < $count; $i++) {
                $status = $post['status_post' . $i];
                if ($status == 'Publish') {
                    $status = 'P';
                } else if ($status == 'Unpublish') {
                    $status = 'U';
                }
                $sql     = "select menu_id from " . MENU . " order by menu_id DESC";
                $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
                if (!empty($results[0]['menu_id'])) {
                    $id = $results[0]['menu_id'];
                } else {
                    $id = 0;
                }
                if ($id > 0) {
                    $rs = DB::insert(MENU)->columns([
                        'menu_name',
                        'menu_link',
                        'status_post',
                        'order_status'
                    ])->values([
                        $post['menu_name'][$i],
                        $post['menu_link'][$i],
                        $status,
                        $id + 1
                    ])->execute();
                } else {
                    $rs = DB::insert(MENU)->columns([
                        'menu_name',
                        'menu_link',
                        'status_post',
                        'order_status'
                    ])->values([
                        $post['menu_name'][$i],
                        $post['menu_link'][$i],
                        $status,
                        '1'
                    ])->execute();
                }
            }
            return $rs;
        }
    }
    /**update menu settings already having values **/
    public function update_menusettings($post)
    {
        $count = count($post['cnt_contact1']);
        if ($count > 0) {
            //$count = $count - 1;
            for ($i = $count; $i > 0; $i--) {
                $status = $post['status_posts' . $i];
                if ($status == 'Publish') {
                    $status = 'P';
                } else if ($status == 'Unpublish') {
                    $status = 'U';
                }
                $query  = [
                    'menu_name' => $post['menu_name1'][$i - 1],
                    'menu_link' => $post['menu_link1'][$i - 1],
                    'status_post' => $status,
                    'order_status' => $i
                ];
                $result = DB::update(MENU)->set($query)->where('menu_id', '=', $i)->execute();
            }
            return $result;
        }
    }
    /** Getting site menu settings **/
    public function get_menusettings()
    {
        $sql     = "select * from " . MENU . " order by order_status ASC";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $results;
    }
    //delete the menus
    public function delete_menus($id)
    {
        $user = DB::delete(MENU)->where('menu_id', '=', $id)->execute();
        return $user;
    }
	
	public function get_admin_dashboard_data()
    {
		
		//echo 'country'.DEFAULT_COUNTRY;exit;
		$result["general_users"] = $this->mongo_db->count(MDB_PASSENGERS,['user_status' => 'A'],['_id']);
		$result["driver"] = $this->mongo_db->count(MDB_PEOPLE,['user_type' => 'D','status' => 'A','company_id'=>(int)1, 'login_country' =>(int)DEFAULT_COUNTRY],['_id']);
		$arguments = [['$lookup' => ['from'=>MDB_PEOPLE,'localField'=> '_id','foreignField' => "company_id",'as'=> "people"]],
			/*array('$unwind' => '$people'),*/
			['$match'=> ['people.user_type'=>'C','people.status' => 'A']],
			['$project' => ['id' 	=> '$_id']],
			['$group' =>['_id' => NULL,'count' => ['$sum' => 1]]],
		];
		$company_count = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
		//print_r($company_count); exit;
        $result["company"] = (isset($company_count['result'][0]['count']))?$company_count['result'][0]['count']:0;
		$result["manager"] = $this->mongo_db->count(MDB_PEOPLE,['user_type' => 'M','status' => 'A','company_id' => (int)1,'login_country' => DEFAULT_COUNTRY],['_id']);
		$result["taxi"] = $this->mongo_db->count(MDB_TAXI,['taxi_status' => 'A', 'taxi_company'=>(int)1, 'taxi_country' => (int)DEFAULT_COUNTRY],['_id']);
		$result["country"] = $this->mongo_db->count(MDB_CSC,['country_status' => 'A'],['_id']);
		$arguments = [['$unwind' => '$stateinfo'],
			['$match'=> ['stateinfo.state_status' => 'A']],
			['$project' => ['id' 	=> '$stateinfo.state_id']],
			['$group' =>['_id' => NULL,'count' => ['$sum' => 1]]],
		];
		$state_count = $this->mongo_db->aggregate(MDB_CSC,$arguments);
        $result["state"] = (isset($state_count['result'][0]['count']))?$state_count['result'][0]['count']:0;
		$arguments = [['$unwind' => '$stateinfo'],['$unwind' => '$stateinfo.cityinfo'],
			['$match'=> ['stateinfo.cityinfo.city_status' => 'A']],
			['$project' => ['id' 	=> '$stateinfo.cityinfo.city_id']],
			['$group' =>['_id' => NULL,'count' => ['$sum' => 1]]],
		];
		$city_count = $this->mongo_db->aggregate(MDB_CSC,$arguments);
        $result["city"] = (isset($city_count['result'][0]['count']))?$city_count['result'][0]['count']:0;
        return $result;
    }
	
	/*public function getUserbyCompany()
    {
		$arguments = array(
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'company_id',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			array(
				'$unwind' => '$company'
			),
			array(
				'$match' => array('user_type' => 'D')
			),
			array(
				'$project' => array(
					'id' => '$_id',
					'company_id' => '$company_id',
					'company_name' => '$company.companydetails.company_name'
				)
			),
			array('$group' =>array('_id' => array('id'=>'$id', 'company_id'=>'$company_id', 'company_name'=>'$company_name'),'count' => array('$sum' => 1))),
			array( '$group' =>array('_id' => '$_id.company_id','details' =>array( '$first' =>array('company_name'=>'$_id.company_name','id'=>'$_id.id')),'count' => array('$sum' => '$count'))),
		);
		$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
		$result = (!empty($result['result']) && isset($result['result'])) ? $result['result'] : array();
		$result_val   = "";
		if(count( $result ) > 0){
			foreach ($result as $res) {
				$result_val .= "['" . $res['details']['company_name'] . "', " . $res["count"] . "" . "],";
			}	
		}
		$result = rtrim($result_val, ",");
		//echo "<pre>"; print_r($result); exit;
        return $result;
    }*/
	
	public function getUserbyCompany()
    {
		$arguments = [
                [
                '$match' => ['user_type' => 'D']
            ],
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
				'$project' => [
					'company_id' => '$company_id',
					'company_name' => '$company.companydetails.company_name'
				]
			],
			
			[
				'$group' =>[
					'_id' => [
						'company_id'=>'$company_id',
						'company_name'=>'$company_name',
					],
					'count' => [
						'$sum' => 1
					],
				]
			],
		];
		$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
		$result = (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
		$result_val   = "";
		if(count( $result ) > 0){
			foreach ($result as $res) {
				$result_val .= "['" . $res['_id']['company_name'] . "', " . $res["count"] . "" . "],";
			}	
		}
		$result = rtrim($result_val, ",");
		//echo "<pre>"; print_r($result); exit;
        return $result;
    } 
	
    public function changegetUserbyCompany($startdate, $enddate)
    {
        $date_where = "  and (created_date between '$startdate' and '$enddate') ";
        $query      = "SELECT count(`id`) as co_nt,c.company_name FROM `people` as p Join `company` as c ON p.company_id=c.cid WHERE p.user_type='D' $date_where group by p.company_id";
        $queryval   = Db::query(Database::SELECT, $query)->execute()->as_array();
        $result     = "";
        foreach ($queryval as $res) {
            $result .= "['" . $res["company_name"] . "', " . $res["co_nt"] . "" . "],";
        }
        $result = rtrim($result, ",");
        return $result;
    }
    public function changetransactionbyCompany($startdate, $enddate)
    {
        $date_where = "  and (T.current_date between '$startdate' and '$enddate') ";
        $query      = "SELECT sum(`fare`) as co_nt,c.company_name FROM " . COMPANY . " as c Join " . PASSENGERS_LOG . " as p ON p.company_id=c.cid Join " . TRANS . " as T on T.passengers_log_id=p.passengers_log_id  $date_where group by p.company_id";
        $queryval   = Db::query(Database::SELECT, $query)->execute()->as_array();
        $result     = "";
        foreach ($queryval as $res) {
            $result .= "['" . $res["company_name"] . "', " . $res["co_nt"] . "" . "],";
        }
        $result = rtrim($result, ",");
        return $result;
    }
	
	public function transactionbyCompany()
    {
		$arguments = [
			[
				'$lookup' => [
					'from' => MDB_PASSENGERSLOGS_COMPLETED,
					'localField' => '_id',
					'foreignField' => 'company_id',
					'as' => 'passengerlog'
				]
			],
			[
				'$unwind' => '$passengerlog'
			],
			[
				'$lookup' => [
					'from' => MDB_TRANSACTION,
					'localField' => 'passengerlog._id',
					'foreignField' => 'passengers_log_id',
					'as' => 'trans'
				]
			],
			[
				'$unwind' => '$trans'
			],
			[
				'$project' => [
					'company_id' => '$_id',
					'fare' => '$trans.fare',
					'company_name' => '$companydetails.company_name'
				]
			],
			[
				'$group' =>[
					'_id' => [
						'company_id'=>'$company_id',
						'company_name'=>'$company_name',
					],
					'fare' => [
						'$sum' => '$fare'
					],
				]
			],
		];
		$result    = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
		$result = (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
		$result_val   = "";
		if(count( $result ) > 0){
			foreach ($result as $res) {
				$result_val .= "['" . $res['_id']['company_name'] . "', " . $res["fare"] . "" . "],";
			}	
		}
		$result = rtrim($result_val, ",");
		//echo "<pre>"; print_r($result); exit;
        return $result;
    } 
    public function get_freetaxi_ajax()
    {
        $startdate = '';
        $enddate   = '';
        if ($startdate && $enddate) {
            $date_where = " AND ( ( '$startdate' between u_startdate and  u_enddate ) or ( '$enddate' between u_startdate and  u_enddate) )";
        } else {
            if ($startdate) {
                $startdate_where = " AND '$startdate'  between u_startdate and  u_enddate ";
            }
            if ($enddate) {
                $enddate_where = " AND '$enddate'  between u_startdate  and  u_enddate ";
            }
            $date_where = $startdate_where . $enddate_where;
        }
        $query  = " select * from " . UNAVAILABILITY . " where 1=1  and u_driverid='$driver_id' $date_where order by u_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
    }
    public function count_fundrequest_list($list)
    {
        if ($list == 'all') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid order by requested_id desc ";
        } else if ($list == 'approved') {
            $query = "select account_balance,company_name,username,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '2' order by requested_id desc ";
        } else if ($list == 'rejected') {
            $query = "select account_balance,company_name,username,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '3' order by requested_id desc ";
        } else if ($list == 'success') {
            $query = "select account_balance,company_name,username,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '1' order by requested_id desc ";
        } else if ($list == 'failed') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '2' order by requested_id desc";
        } else if ($list == 'pending') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '1' order by requested_id desc";
        }
        //echo $query;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($result);
    }
    public function all_fundreuest_list($list, $offset, $val)
    {
        if ($list == 'all') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid order by requested_id desc limit $val offset $offset";
        } else if ($list == 'approved') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '2' order by requested_id desc limit $val offset $offset";
        } else if ($list == 'rejected') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '3' order by requested_id desc limit $val offset $offset";
        } else if ($list == 'success') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '1' order by requested_id desc limit $val offset $offset";
        } else if ($list == 'failed') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '2' order by requested_id desc limit $val offset $offset";
        } else if ($list == 'pending') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '1' order by requested_id desc limit $val offset $offset";
        }
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function count_search_fundrequest_list($list, $company_id)
    {
        if ($company_id != '') {
            $condition = " and company.cid ='" . $company_id . "'";
        } else {
            $condition = '';
        }
        if ($list == 'all') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where 1=1 $condition order by requested_id desc ";
        } else if ($list == 'approved') {
            $query = "select account_balance,company_name,username,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '2' $condition order by requested_id desc ";
        } else if ($list == 'rejected') {
            $query = "select account_balance,company_name,username,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '3' $condition order by requested_id desc ";
        } else if ($list == 'success') {
            $query = "select account_balance,company_name,username,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '1' $condition order by requested_id desc ";
        } else if ($list == 'failed') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '2' $condition order by requested_id desc";
        } else if ($list == 'pending') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '1' $condition order by requested_id desc";
        }
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($result);
    }
    public function all_search_fundreuest_list($list, $offset, $val, $company_id)
    {
        if ($company_id != '') {
            $condition = " and company.cid ='" . $company_id . "'";
        } else {
            $condition = '';
        }
        if ($list == 'all') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where 1=1 $condition order by requested_id desc limit $val offset $offset";
        } else if ($list == 'approved') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '2' $condition order by requested_id desc limit $val offset $offset";
        } else if ($list == 'rejected') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '3' $condition order by requested_id desc limit $val offset $offset";
        } else if ($list == 'success') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '1' $condition order by requested_id desc limit $val offset $offset";
        } else if ($list == 'failed') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '2' $condition order by requested_id desc limit $val offset $offset";
        } else if ($list == 'pending') {
            $query = "select account_balance,company_name,name,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '1' $condition order by requested_id desc limit $val offset $offset";
        }
        //echo $query;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function delete_module($pay_mod_id)
    {
        $rows_deleted = DB::delete(PAYMENT_MODULES)->where('pay_mod_id', '=', $pay_mod_id)->execute();
        return $rows_deleted;
    }
	/*public function company_accountbalance()
    {
        $query    = "SELECT account_balance,c.company_name FROM " . COMPANY . " as c Join " . PEOPLE . " as p ON p.company_id=c.cid where user_type='C'   order by p.id";
        $queryval = Db::query(Database::SELECT, $query)->execute()->as_array();
		
        $result   = "";
        foreach ($queryval as $res) {
            $result .= "['" . $res["company_name"] . "', " . $res["account_balance"] . "" . "],";
        }
        $result = rtrim($result, ",");
        return $result;
    }*/
	
	public function company_accountbalance()
    {
		$arguments = [
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => '_id',
					'foreignField' => 'company_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$match' => ['people.user_type' => 'C']
			],
			[
				'$project' => [
					'account_balance' => '$people.account_balance',
					'company_name' => '$companydetails.company_name'
				]
			],
			[
				'$sort' => [
					'people._id' => 1
				]
			],
		];
		$result    = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
		$queryval = (isset($result['result']))?$result['result']:[];
		if(count($queryval) > 0) {
			$result   = "";
			foreach ($queryval as $res) {
				$company_name = (isset($res["company_name"]))?$res["company_name"]:"-";
				$account_balance = (isset($res["account_balance"]))?$res["account_balance"]:"-";
				$result .= "['" . $company_name . "', " . $account_balance . "" . "],";
			}
			$result = rtrim($result, ",");
		}
		//echo "<pre>"; print_r($result); exit;
		return $result;
    }
	
    public function print_fundreuest_list($company_id, $list)
    {
        if ($company_id != '') {
            $condition = " and company.cid ='" . $company_id . "'";
        } else {
            $condition = "";
        }
        if ($list == 'all') {
            $query = "select company_name,name,email,address,phone,paypal_account,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where 1=1 $condition order by requested_id desc ";
        } else if ($list == 'approved') {
            $query = "select company_name,name,email,address,phone,paypal_account,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '2' $condition order by requested_id desc ";
        } else if ($list == 'rejected') {
            $query = "select company_name,name,email,address,phone,paypal_account,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '3' $condition order by requested_id desc ";
        } else if ($list == 'success') {
            $query = "select company_name,name,email,address,phone,paypal_account,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id  left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '1' $condition order by requested_id desc ";
        } else if ($list == 'failed') {
            $query = "select company_name,name,email,address,phone,paypal_account,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.pay_status = '2' $condition order by requested_id desc";
        } else if ($list == 'pending') {
            $query = "select company_name,name,email,address,phone,paypal_account,request_fund.requested_id,company_ownerid,request_fund.amount,DATE_FORMAT(requested_date, '%b %d %Y %H:%i:%s') as requested_date,user_type,request_fund.status,request_fund.pay_status,wtd.correlationid,wtd.masscapturetime,wtd.errorcode,wtd.long_message from " . REQUEST_FUND . " as request_fund  left join " . WITHDRAW_TRANSACTION_DETAILS . " as wtd on request_fund.requested_id =wtd.requested_id left join " . PEOPLE . " as people on request_fund.company_ownerid = people.id left join " . COMPANY . " as company on request_fund.company_id = company.cid where request_fund.status = '1' $condition order by requested_id desc";
        }
        //echo $query;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    //live users search
    public function live_usersearch_list($keyword = "")
    {
        $company_id         = $this->session->get('company_id');
        $user_created_where = "";
        if (!empty($company_id)) {
            $user_created_where = " AND passenger_cid = $company_id ";
        }
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        //condition for status
        //====================== 
        //$usertype_where= ($user_type) ? " AND user_type = '$user_type'" : "";
        //condition for status
        //====================== 
        //$staus_where= ($status) ? " AND status = '$status'" : "";
        //search result export
        //=====================
        $name_where = "";
        if ($keyword) {
            $name_where = " AND(name LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%') ";
        }
        $query   = " select * from " . PASSENGERS . " where login_status='A' $name_where $user_created_where order by created_date DESC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_live_usersearch_list($keyword = "")
    {
        $company_id         = $this->session->get('company_id');
        $user_created_where = "";
        if (!empty($company_id)) {
            $user_created_where = " AND passenger_cid = $company_id ";
        }
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        //condition for status
        //====================== 
        //$usertype_where= ($user_type) ? " AND user_type = '$user_type'" : "";
        //condition for status
        //====================== 
        //$staus_where= ($status) ? " AND status = '$status'" : "";
        //search result export
        //=====================
        $name_where = "";
        if ($keyword) {
            $name_where = " AND(name LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ) ";
        }
        $query   = " select id from " . PASSENGERS . " where login_status='A' $name_where $user_created_where order by created_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_all_live_search_list($keyword = "", $offset = "", $val = "")
    {
        $company_id         = $this->session->get('company_id');
        $user_created_where = "";
        if (!empty($company_id)) {
            $user_created_where = " AND passenger_cid = $company_id ";
        }
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        //condition for status
        //====================== 
        //$usertype_where= ($user_type) ? " AND user_type = '$user_type'" : "";
        //condition for status
        //====================== 
        //$staus_where= ($status) ? " AND status = '$status'" : "";
        //search result export
        //=====================
        $name_where = "";
        if ($keyword) {
            $name_where = " AND(name LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ) ";
        }
        $query   = " select * from " . PASSENGERS . " where login_status='A' $name_where $user_created_where order by created_date DESC limit $val offset $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function get_user_status_block($userid)
    {
        $rs = DB::select('id')->from(PEOPLE)->where('id', '=', $userid)->where('status', '=', 'A')->execute()->as_array();
        return count($rs);
    }
    public function get_company_status($companyid)
    {
        $rs = DB::select('cid')->from(COMPANY)->where('cid', '=', $companyid)->where('company_status', '=', 'A')->execute()->as_array();
        return count($rs);
    }
    public function count_active_driverlist($company = '', $manager_id = '', $taxiid = '', $driverid = '', $passengerid = '', $startdate = '', $enddate = '')
    {
        $query_where       = '';
        $usertype          = $this->session->get('user_type');
        $condition         = '';
        $transaction_model = Model::factory('transaction');
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $transaction_model->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $transaction_model->getdriverdetails($company, $manager_id);
            $driver_id  = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $driver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($driver_id, 0, strlen($driver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        //echo 'as'.$driver_ids;exit;
        $passengerlist = $transaction_model->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= "AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($driverid != "All")) {
            $condition .= " and pl.driver_id =  '$driverid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= "AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        } else {
            //echo $usertype;
            if (($usertype == 'M') || ($usertype == 'C')) {
                if (count($passengerlist) > 0) {
                    //$condition .= " AND pl.passengers_id IN ( $passenger_ids )";
                }
            } else {
                //$condition .= " ";
            }
        }
        if ($startdate == '' && $enddate == '') {
            $startdate = date('Y-m-d') . ' 00:00:00';
            $enddate   = date('Y-m-d') . ' 23:59:59';
        }
        $condition .= "  and (pl.pickup_time between '$startdate' and '$enddate') ";
        if ($company != '') {
            $query_where = "  and c.cid='$company' ";
        }
        if ($company != '') {
            $query_where = "  and c.cid='$company' ";
        }
        /*
         * Before change
         $query = " SELECT *,count(tr.passengers_log_id) as trip_count,sum(amt) as trip_amount, pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `".PASSENGERS_LOG."` as pl Join `".COMPANY."` as c ON pl.company_id=c.cid Join `".PEOPLE."` as pe ON pe.id=pl.driver_id  Join `".PASSENGERS."` as pa ON pl.passengers_id=pa.id  Join `".TRANS."` as tr ON pl.passengers_log_id=tr.passengers_log_id  where 1=1 $condition group by pl.driver_id  order by pl.passengers_log_id desc";
         */
        $query   = " SELECT *,count(tr.passengers_log_id) as trip_count,sum(amt) as trip_amount, pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id  Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id  Join `" . TRANS . "` as tr ON pl.passengers_log_id=tr.passengers_log_id JOIN `" . TAXI . "` as t ON  pl.taxi_id=t.taxi_id where 1=1 $condition group by pl.taxi_id  order by pl.passengers_log_id desc";
        //echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function active_driverlist_details($company, $manager_id, $taxiid, $driverid, $passengerid, $startdate, $enddate, $offset, $val)
    {
        $usertype          = $this->session->get('user_type');
        $condition         = '';
        $transaction_model = Model::factory('transaction');
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $transaction_model->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $transaction_model->getdriverdetails($company, $manager_id);
            $driver_id  = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $driver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($driver_id, 0, strlen($driver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        //echo 'as'.$driver_ids;exit;
        $passengerlist = $transaction_model->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= "AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($driverid != "All")) {
            $condition .= " and pl.driver_id =  '$driverid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= "AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        } else {
            //echo $usertype;
            if (($usertype == 'M') || ($usertype == 'C')) {
                if (count($passengerlist) > 0) {
                    //$condition .= " AND pl.passengers_id IN ( $passenger_ids )";
                }
            } else {
                //$condition .= " ";
            }
        }
        if ($startdate == '' && $enddate == '') {
            $startdate = date('Y-m-d') . ' 00:00:00';
            $enddate   = date('Y-m-d') . ' 23:59:59';
        }
        $condition .= "  and (pl.pickup_time between '$startdate' and '$enddate') ";
        if ($company != '') {
            $query_where = "  and c.cid='$company' ";
        }
        if ($company != '') {
            $query_where = "  and c.cid='$company' ";
        }
        /*
         * before change
         $query = " SELECT *,count(tr.passengers_log_id) as trip_count,sum(amt) as trip_amount, pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `".PASSENGERS_LOG."` as pl Join `".COMPANY."` as c ON pl.company_id=c.cid Join `".PEOPLE."` as pe ON pe.id=pl.driver_id  Join `".PASSENGERS."` as pa ON pl.passengers_id=pa.id  Join `".TRANS."` as tr ON pl.passengers_log_id=tr.passengers_log_id  where 1=1 $condition group by pl.driver_id  order by pl.passengers_log_id desc  limit $val offset $offset";
         */
        $query   = " SELECT pl.*,c.*,pe.*,t.taxi_no,count(tr.passengers_log_id) as trip_count,sum(amt) as trip_amount, pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id  Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id  Join `" . TRANS . "` as tr ON pl.passengers_log_id=tr.passengers_log_id  JOIN `" . TAXI . "` as t ON  pl.taxi_id=t.taxi_id where 1=1 $condition group by pl.taxi_id  order by pl.passengers_log_id desc  limit $val offset $offset";
        //echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_calendarwise_translist($list, $company, $manager_id, $taxiid, $driverid, $passengerid, $startdate, $enddate, $transaction_id, $payment_type)
    {
        //echo $driverid;exit;
        $usertype = $this->session->get('user_type');
        if ($startdate != '') {
            $fromdate = $startdate . ' 00:00:00';
            $enddate  = $startdate . ' 23:59:59';
        }
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $driver_id  = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $driver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($driver_id, 0, strlen($driver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        //echo 'as'.$driver_ids;exit;
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        //echo $passenger_ids;
        if ($transaction_id != '') {
            $trans_condition = " and t.transaction_id like '%" . $transaction_id . "%' ";
        } else {
            $trans_condition = '';
        }
        if ($list == 'all') {
            $condition = " "; //pl.driver_reply = 'A' ";
        } else if ($list == 'success') {
            $condition = "and pl.travel_status = '1' and pl.driver_reply = 'A' ";
        } else if ($list == 'cancelled') {
            $condition = "and ((pl.travel_status = '4' and pl.driver_reply = 'A') or (pl.travel_status = '0' and pl.driver_reply = 'C'))";
        } else if ($list == 'rejected') {
            $condition = "and pl.driver_reply = 'R'";
        }
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $condition .= " and payment_type = '$payment_type' ";
            }
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= "AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($driverid != "All")) {
            $condition .= " and pl.driver_id =  '$driverid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= "AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        } else {
            //echo $usertype;
            if (($usertype == 'M') || ($usertype == 'C')) {
                if (count($passengerlist) > 0) {
                    //$condition .= " AND pl.passengers_id IN ( $passenger_ids )";
                }
            } else {
                //$condition .= " ";
            }
        }
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$fromdate' and pl.createdate <=  '$enddate' ";
        }
        if ($list == 'rejected') {
            $query = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id  where 1=1 $condition order by pl.passengers_log_id desc";
        } else {
            $query = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id where  1=1 $condition $trans_condition order by pl.passengers_log_id desc";
        }
        //echo '<br/>'.$query; 
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    /********* Graph ****************/
    public function getgraphvalues_calcendarwise($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type)
    {
        if ($startdate != '') {
            $fromdate = $startdate . ' 00:00:00';
            $enddate  = $startdate . ' 23:59:59';
        } else {
        }
        $usertype = $this->session->get('user_type');
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $cdriver_id = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $cdriver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        //echo $passenger_ids;
        if ($transaction_id != '') {
            //$trans_condition = " and t.transaction_id like '%".$transaction_id."%'";
            $trans_condition = '';
        } else {
            $trans_condition = '';
        }
        if ($list == 'all') {
            $condition = "and pl.driver_reply = 'A' ";
        } else if ($list == 'success') {
            $condition = "and pl.travel_status = '1' and pl.driver_reply = 'A' ";
        } else if ($list == 'cancelled') {
            $condition = "and pl.travel_status = '4' and pl.driver_reply = 'A' ";
        } else if ($list == 'rejected') {
            $condition = "and pl.driver_reply != 'A'";
        }
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $condition .= " and payment_type ='$payment_type' ";
            }
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= "AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($driver_id != "All")) {
            $condition .= " and pl.driver_id =  '$driver_id'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= "AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        } else {
            //echo $usertype;
            if (($usertype == 'M') || ($usertype == 'C')) {
                if (count($passengerlist) > 0) {
                    //$condition .= " AND pl.passengers_id IN ( $passenger_ids )";
                }
            } else {
                //$condition .= " ";
            }
        }
        if ($startdate != "") {
            $condition .= "and pl.createdate >=  '$fromdate' and pl.createdate <=  '$enddate' ";
        }
        $query   = " SELECT pl.createdate,round(sum(t.fare)) as amount FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id where 1=1 $condition $trans_condition group by DATE(pl.`createdate`)";
        //echo '<br/><br/><br/>'.$query;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function calcendarwise_details($list, $company, $manager_id, $taxiid, $driverid, $passengerid, $startdate, $enddate, $offset = '', $val = '', $transaction_id, $payment_type)
    {
        if ($startdate != '') {
            $fromdate = $startdate . ' 00:00:00';
            $enddate  = $startdate . ' 23:59:59';
        }
        //$totalfare = "select sum(fare) from `transacation`";
        $usertype = $this->session->get('user_type');
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $cdriver_id = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $cdriver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        //echo $passenger_ids;
        if ($transaction_id != '') {
            //$trans_condition = " and t.transaction_id like '%".$transaction_id."%'";
            $trans_condition = '';
        } else {
            $trans_condition = '';
        }
        if ($list == 'all') {
            $condition = " "; //pl.driver_reply = 'A' ";
        } else if ($list == 'success') {
            $condition = "and pl.travel_status = '1' and pl.driver_reply = 'A' ";
        } else if ($list == 'cancelled') {
            $condition = "and ((pl.travel_status = '4' and pl.driver_reply = 'A') or (pl.travel_status = '0' and pl.driver_reply = 'C'))";
        } else if ($list == 'rejected') {
            $condition = "and pl.driver_reply = 'R'";
        }
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $condition .= " and payment_type = '$payment_type'";
            }
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= " AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($driverid != "All")) {
            $condition .= " and pl.driver_id  =  '$driverid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= " AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        } else {
            //echo $usertype;
            if (($usertype == 'M') || ($usertype == 'C')) {
                if (count($passengerlist) > 0) {
                    //$condition .= " AND pl.passengers_id IN ( $passenger_ids )";
                }
            } else {
                //$condition .= " ";
            }
        }
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$fromdate' and pl.createdate <=  '$enddate' ";
        }
        if ($list == 'rejected') {
            $query = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id where 1=1 $condition order by pl.passengers_log_id desc  limit $val offset $offset";
            //echo 'as';
        } else {
            $query = " SELECT * ,pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id where 1=1 $condition $trans_condition order by pl.passengers_log_id desc limit $val offset $offset";
        }
        //echo '<br/><br/><br/>'.$query;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    } //
    /** Get Passengers List **************/
    public function getpassengerdetails($company_id, $manager_id)
    {
        $usertype = $this->session->get('user_type');
        if (($manager_id != "") && ($manager_id != "All")) {
            $manager_details = $this->manager_details($manager_id);
            $country_id      = $manager_details[0]['login_country'];
            $state_id        = $manager_details[0]['login_state'];
            $city_id         = $manager_details[0]['login_city'];
            $company_id      = $manager_details[0]['company_id'];
        } else {
            $country_id = $this->session->get('country_id');
            $state_id   = $this->session->get('state_id');
            $city_id    = $this->session->get('city_id');
        }
        $joins     = "";
        $condition = " ";
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            //$joins="LEFT JOIN `country` ON (`".PEOPLE."`.`login_country` = `country`.`country_id`) LEFT JOIN `state` ON (`".PEOPLE."`.`login_state` = `state`.`state_id`) LEFT JOIN `city` ON (`".PEOPLE."`.`login_city` = `city`.`city_id`) ";
            //$condition .= "and `login_state` = '".$state_id."' AND `login_city` = '".$city_id."' AND `state`.`state_status` = 'A' and `city`.`city_status` = 'A'";
        }
        if (($company_id != "") && ($company_id != "All")) {
            $condition .= "WHERE " . PASSENGERS . ".passenger_cid = '" . $company_id . "'";
        } else {
            $joins = " LEFT ";
        }
        $query   = "SELECT " . PASSENGERS . ".id," . PASSENGERS . ".name," . COMPANY . ".company_name FROM " . PASSENGERS . " {$joins}JOIN  " . COMPANY . " ON (  " . PASSENGERS . ".`passenger_cid` =  " . COMPANY . ".`cid` ) $condition  ORDER BY `name` ASC";
        //echo $query;exit;
        //$query = "select * from ".PASSENGERS." ORDER BY  `passengers`.`name` ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /**
     * ****export_data()****
     *@export user listings
     */
    // To Check Currency code is equal to Currency symbol
    public static function checksite_currency($currencysymbol, $currencycode)
    {
        // To Check Currency code is equal to Currency symbol
        /*$result = DB::select('country_id')->from(COUNTRY)->where('currency_code', '=', $currencycode)->where('currency_symbol', '=', $currencysymbol)->execute()->as_array();
        return (count($result) > 0)?true:false;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,['currency_code'=>$currencycode,'currency_symbol'=>$currencysymbol],['country_id']);
		return ($result>0)?false:true;
    }
    /*public function get_company_details()
    {
        $result = DB::select('company_name', 'cid')->from(COMPANY)->join(PEOPLE)->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where(PEOPLE . '.user_type', '=', 'C')->where(PEOPLE . '.status', '=', 'A')->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return 0;
        }
    }*/
	
	public function get_company_details()
    {
		$match_query = [];
		//$match_query['people.user_type'] = 'C';
		$match_query['people.status'] = 'A';
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = [
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => '_id',
					'foreignField' => 'company_id',
					'as' => 'people'
				]
			],
			/*array(
				'$unwind' => '$people'
			),*/
			[
				'$match' => $match_query
			],
			[
				'$project' => [
					'cid' => '$_id',
					'company_name' => '$companydetails.company_name'
				]
			],
		];
		$result    = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : 0;
    }
	
    public function company_details_count($startdate, $enddate)
    {
        $condition = "";
        $condition .= " f.upgrade_id IN (select max(upgrade_id) from package_report where upgrade_packageid IN ('5','6') group by upgrade_companyid order by upgrade_id asc)";
        if ($startdate != "") {
            /*$condition .= " and c.company_created_date >=  '$startdate' and c.company_created_date <=  '$enddate' ";*/
        }
        $query   = "SELECT d.company_name, concat(c.`company_domain`, '.taximobility.com') as companydomain, p.`name`, p.`email`, p.`org_password` as password,c.`company_created_date`, c.`company_paypal_username`, c.`company_paypal_password`, c.`company_paypal_signature`, c. `company_api_key`, f.`upgrade_date`, f.`upgrade_expirydate`,f.upgrade_id FROM `companyinfo` c join company d on c.company_cid=d.cid join package_report f on f.upgrade_companyid=d.cid join people p on p.id=d.userid where $condition  group by d.`company_name`";
        //echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function company_details($offset, $val, $startdate, $enddate)
    {
        $condition = "";
        $condition .= " f.upgrade_id IN (select max(upgrade_id) from package_report where upgrade_packageid IN ('5','6') group by upgrade_companyid order by upgrade_id asc)";
        if ($startdate != "") {
            /*$condition .= " and c.company_created_date >=  '$startdate' and c.company_created_date <=  '$enddate' ";*/
        }
        $query   = "SELECT c.company_cid,d.company_name, concat(c.`company_domain`, '.taximobility.com') as companydomain, p.`name`, p.`email`, p.`org_password` as password,c.`company_created_date`, c.`company_paypal_username`, c.`company_paypal_password`, c.`company_paypal_signature`, c. `company_api_key`, f.`upgrade_date`, f.`upgrade_expirydate`,f.upgrade_id FROM `companyinfo` c join company d on c.company_cid=d.cid join package_report f on f.upgrade_companyid=d.cid join people p on p.id=d.userid where $condition
		group by d.`company_name`
		order by f.`upgrade_date` desc
		limit $val offset $offset";
        //echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function company_details_search($offset, $val, $startdate, $enddate, $package)
    {
        $condition = "";
        $condition .= " f.upgrade_id IN (select max(upgrade_id) from package_report where upgrade_packageid IN ('5','6') group by upgrade_companyid order by upgrade_id desc)";
        if ($startdate != "") {
            /* $condition .= " and c.company_created_date >=  '$startdate' and c.company_created_date <=  '$enddate' "; */
        }
        if ($package != "") {
            if ($package == 1) {
                $condition .= " and f.upgrade_packageid = 5";
            } else {
                $condition .= " and f.upgrade_packageid = 6";
            }
        }
        $query   = "SELECT c.company_cid,d.company_name, concat(c.`company_domain`, '.taximobility.com') as companydomain, p.`name`, p.`email`, p.`org_password` as password,c.`company_created_date`, c.`company_paypal_username`, c.`company_paypal_password`, c.`company_paypal_signature`, c. `company_api_key`, f.`upgrade_date`, f.`upgrade_expirydate`,f.upgrade_id
		FROM `companyinfo` c
		join company d on c.company_cid=d.cid
		join package_report f on f.upgrade_companyid=d.cid
		join people p on p.id=d.userid
		where $condition
		group by d.`company_name`
		order by f.`upgrade_date` desc
		limit $val offset $offset";
        //echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function saas_excel_report($startdate, $enddate, $package)
    {
        $condition = "";
        $condition .= " f.upgrade_id IN (select max(upgrade_id) from package_report where upgrade_packageid IN ('5','6') group by upgrade_companyid order by upgrade_date desc)";
        if ($startdate != "") {
            /* $condition .= " and c.company_created_date >=  '$startdate' and c.company_created_date <=  '$enddate' "; */
        }
        if ($package != "") {
            if ($package == 1) {
                $condition .= " and f.upgrade_packageid = 5";
            } else {
                $condition .= " and f.upgrade_packageid = 6";
            }
        }
        $query   = "SELECT d.company_name, concat(c.`company_domain`, '.taximobility.com') as companydomain, p.`name`, p.`email`, p.`org_password` as password,c.`company_created_date`, c.`company_paypal_username`, c.`company_paypal_password`, c.`company_paypal_signature`, c. `company_api_key`, f.`upgrade_date`, f.`upgrade_expirydate`,f.upgrade_id FROM `companyinfo` c join company d on c.company_cid=d.cid join package_report f on f.upgrade_companyid=d.cid join people p on p.id=d.userid where $condition  group by d.`company_name` order by upgrade_date desc";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function company_details_search_count($startdate, $enddate, $package)
    {
        $condition = "";
        $condition .= " f.upgrade_id IN (select max(upgrade_id) from package_report where upgrade_packageid IN ('5','6') group by upgrade_companyid order by upgrade_id asc)";
        if ($startdate != "") {
            /*$condition .= " and c.company_created_date >=  '$startdate' and c.company_created_date <=  '$enddate' ";*/
        }
        if ($package != "") {
            if ($package == 1) {
                $condition .= " and f.upgrade_packageid = 5";
            } else {
                $condition .= " and f.upgrade_packageid = 6";
            }
        }
        $query   = "SELECT d.company_name, concat(c.`company_domain`, '.taximobility.com') as companydomain, p.`name`, p.`email`, p.`org_password` as password,c.`company_created_date`, c.`company_paypal_username`, c.`company_paypal_password`, c.`company_paypal_signature`, c. `company_api_key`, f.`upgrade_date`, f.`upgrade_expirydate`,f.upgrade_id FROM `companyinfo` c join company d on c.company_cid=d.cid join package_report f on f.upgrade_companyid=d.cid join people p on p.id=d.userid where $condition  group by d.`company_name`";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function all_driver_map_list()
    {		
		$user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = (int)$this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$match_query =[];
		$match_query['user_type'] = 'D';
		$match_query['status'] = 'A';
		if (($company_id!="" && $company_id!=0) && ($usertype == 'M') || ($usertype == 'C')) {
			$match_query['company_id'] = $company_id;
        }
		$arguments = [
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => '_id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			[
				'$match' => $match_query
			],
			[
				'$project' => [
					'name'=>'$name',
					'driver_status' => '$driver.status',
					'shift_status' => '$driver.shift_status',
					'location' => '$driver.loc.coordinates'
				]
			]
		];
		$result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result) && isset($result['result']))?$result['result']:[];
    }
    //function to get passenger list who have referral
    public function passenger_list_referralcode()
    {
        $sql    = "SELECT id,wallet_amount FROM " . PASSENGERS . " WHERE referral_code != '' and user_status = 'A'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    //function to update wallet
    public function update_wallet($passengeridArr, $referral_amount)
    {
        $query = [
            "referral_code_amount" => $referral_amount
        ];
        return DB::update(PASSENGERS)->set($query)->where('id', 'IN', $passengeridArr)->execute();
    }
    public function siteinfo_details()
    {
        /*$sql = "SELECT admin_commission,referral_discount,currency_format,referral_amount,referral_settings  FROM " . SITEINFO;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_SITEINFO, [
            '_id' => 1
        ], [
            'admin_commission',
            'referral_discount',
            'currency_format',
            'referral_amount',
            'referral_settings'
        ]);
        $res    = [];
        foreach ($result as $keys => $values) {
            $res[0][$keys] = $values;
        }
        return $res;
    }
    public static function check_wallet_amount_range($base_fare)
    {
        if (preg_match('/^\d+(\-\d+)*$/', $base_fare)) {
            return true;
        } else {
            return false;
        }
    }
    /** Fuction to check wallet amount1 is greater than wallet amount2 or wallet amount3 **/
    public static function compare_wallet_amount1($amount1, $amount2, $amount3)
    {
        if ($amount1 > $amount2 || $amount1 > $amount3) {
            return false;
        } else {
            return true;
        }
    }
    /** Fuction to check wallet amount1 is greater than wallet amount2 or wallet amount3 **/
    public static function compare_wallet_amount2($amount1, $amount2)
    {
        if ($amount1 > $amount2) {
            return false;
        } else {
            return true;
        }
    }
    //** Function to check whether the given value is below 100 **//
    public static function check_percentage($percentage)
    {
        if ($percentage > 100) {
            return false;
        } else {
            return true;
        }
    }
	
	//** Function to get all logged in passengers list **//	
	/*public function logged_in_passengers()
	{
		$sql = "SELECT id,name,latitude,longitude FROM ".PASSENGERS." WHERE user_status = 'A' and login_status = 'S'";
		$result=Db::query(Database::SELECT, $sql)->execute()->as_array();
		return $result;
	} */
	
	//** Function to get all logged in passengers list **//	
	public function logged_in_passengers()
	{
		/*$sql = "SELECT id,name,latitude,longitude FROM ".PASSENGERS." WHERE user_status = 'A' and login_status = 'S'";
		$result=Db::query(Database::SELECT, $sql)->execute()->as_array();
		return $result;*/
	
		$result = $this->mongo_db->find(MDB_PASSENGERS,['user_status' => 'A','login_status' => 'S'],['name','loc.coordinates']);
		//echo "<pre>"; print_r(iterator_to_array($result)); exit;
		return (!empty($result))?iterator_to_array($result):[];
	}
	
	public function updatemilestone($post) {
		$result = $this->mongo_db->remove(MDB_TAXI_SERVICE_RANGE,[]);
		$i = 1;
		$miles = [];
		foreach($post['milestone_km'] as $key => $milestone) {
			$miles[$post['milestone_km'][$key]] = $post['milestone_label'][$key];
		}
		ksort($miles);
		foreach($miles as $key => $value) {
			$arr = ["_id"=>(int)$i,"km"=>(int)$key,"label"=>$value,"status"=>"A"];					
			$result = $this->mongo_db->insert(MDB_TAXI_SERVICE_RANGE, $arr );
			$i++;
		}		
	}
	
	//////// Slider Sttings //////////////
	public function validate_slider_module($arr = "", $post, $slider_interval, $files_value_array = "")
    {
		
		$array_merge = array_merge($files_value_array,$post);
		$validation = Validation::factory($array_merge);
		$validation->rule($slider_interval, 'not_empty')->rule($slider_interval, 'numeric');
		foreach($files_value_array as $key => $value) {
			$validation->rules(
			  $key,
			  [
				[['Upload', 'valid']],
				//array(array('Upload', 'not_empty')),
				['Upload::type', [':value', ['jpg', 'png', 'gif', 'jpeg']]]
			  ]
			)->label($key, 'Invalid File Type');
		}
		return $validation;        
    }
	public function slider_settings()
    {
        //MongoDB
        $res    = $this->mongo_db->find_one(MDB_SLIDER_SETTINGS, [
            '_id' => 1
        ]);
        $result = [];
        foreach ($res as $keys => $values) {
            $result[0][$keys] = $values;
        }
        return $result;
    }
    public function update_slider_settings($data)
    {
		//MongoDB
        if(!empty($data)) {
			$result = $this->mongo_db->update(MDB_SLIDER_SETTINGS, [
				'_id' => 1
			], [
				'$set' => $data
			], [
				'upsert' => true
			]); 
			return (isset($result['ok']) && $result['ok'] == 1) ? true : false;       
		} else {
			return true;	
		}
    }
    public function slider_new()
    {
        //MongoDB
        $res    = $this->mongo_db->find_one(MDB_SLIDER_SETTINGS, [
            '_id' => 2
        ]);
        $result = [];
        if(!empty($res))
        {
            foreach ($res as $keys => $values) {
                $result[0][$keys] = $values;
            }
        }
        return $result;
    }
    public function validate_banner_slider($post, $slider_interval, $files_value_array = "")
    {
        $array_merge = array_merge($files_value_array,$post);
        $validation = Validation::factory($array_merge);
       $validation->rule('slider_interval', 'not_empty')
                  ->rule('slider_interval', 'numeric')
                  ->rule('image_name_ban_en', 'not_empty')->label('image_name_ban_en', 'Please select an image')
                  ->rule('image_name_ban_ar', 'not_empty')->label('image_name_ban_ar', 'Please select an image')
                  ->rule('image_name_en', 'not_empty')->label('image_name_en', 'Please select an image')
                  ->rule('image_name_ar', 'not_empty')->label('image_name_ar', 'Please select an image');
      
        return $validation;        
    }
    public function update_slider_settings_new($data)
    {
        //MongoDB
        if(!empty($data)) {
            $result = $this->mongo_db->update(MDB_SLIDER_SETTINGS, [
                '_id' => 2
            ], [
                '$set' => $data
            ], [
                'upsert' => true
            ]); 
            return (isset($result['ok']) && $result['ok'] == 1) ? true : false;       
        } else {
            return true;    
        }
    }
    
    //////// Slider Sttings //////////////
}


