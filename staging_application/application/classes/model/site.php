<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Contains site method used queries
 * 
 * @author     Ndot Team
 * @copyright  (c) 2008-2011 Ndot Team
 * @license    http://ndot.in/license
 */
class Model_Site extends Model
{
    public function __construct()
    {
        $this->session     = Session::instance();
        $this->currentdate = Commonfunction::getCurrentTimeStamp();
        //MongoDB Instance
        $this->mongo_db    = MangoDB::instance('default');
    }
    public function site_info_fetch()
    {
        $query = DB::select('app_description', 'email_id', 'phone_number', 'app_name', 'currency_symbol', 'currency_format')->from(SITEINFO)->limit(1)->execute()->as_array();
        return $query;
    }    
    //Users block/active/delete 
    //=================================
    public function block_users_request($activeids)
    {
        //check whether id is exist in checkbox or single block request
        //==================================================================
        /*$arr_chk = " id in ('" . implode("','", $blockids) . "') ";
        $query   = " UPDATE " . PEOPLE . " SET  status = 'D' WHERE $arr_chk ";
        $result  = Db::query(Database::UPDATE, $query)->execute();
        return count($result);*/
		
        //MongoDB
        //Here changing array values with string to integers values
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result     = $this->mongo_db->update(MDB_PEOPLE, [
            '_id' => [
                '$in' => $active_ids
            ]
        ], [
            '$set' => [
                'status' => 'D'
            ]
        ], [
            'multiple' => true
        ]);
        //echo '<pre>';print_r($result);exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function active_users_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        /*$arr_chk = " id in ('" . implode("','", $activeids) . "') ";
        $query   = " UPDATE " . PEOPLE . " SET  status = 'A' WHERE $arr_chk ";
        $result  = Db::query(Database::UPDATE, $query)->execute();
        return count($result);*/
		
		//MongoDB
        //Here changing array values with string to integers values
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result     = $this->mongo_db->update(MDB_PEOPLE, [
            '_id' => [
                '$in' => $active_ids
            ]
        ], [
            '$set' => [
                'status' => 'A'
            ]
        ], [
            'multiple' => true
        ]);
        //echo '<pre>';print_r($result);exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function trash_users_request($activeids)
    {
        //check whether id is exist in checkbox or single trash request
        //==================================================================
        /*$arr_chk = " id in ('" . implode("','", $trashids) . "') ";
        $query   = " UPDATE " . PEOPLE . " SET  status = 'T' WHERE $arr_chk ";
        $result  = Db::query(Database::UPDATE, $query)->execute();
        return count($result);*/
		
		//MongoDB
        //Here changing array values with string to integers values
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result     = $this->mongo_db->update(MDB_PEOPLE, [
            '_id' => [
                '$in' => $active_ids
            ]
        ], [
            '$set' => [
                'status' => 'T'
            ]
        ], [
            'multiple' => true
        ]);
        //echo '<pre>';print_r($result);exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function delete_users_request($activeids)
    {
        // People delete 
        //==================
        /*$arr_chk = " id in ('" . implode("','", $deleteids) . "') ";
        $query   = " DELETE FROM " . PEOPLE . "  WHERE $arr_chk ";
        $result  = Db::query(Database::DELETE, $query)->execute();
        return $result;*/
		
		//MongoDB
        //Here changing array values with string to integers values
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result     = $this->mongo_db->remove(MDB_PEOPLE, [
            '_id' => [
                '$in' => $active_ids
            ]
        ]);
        //echo '<pre>';print_r($result);exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function block_passenger_request($blockids)
    {
        //check whether id is exist in checkbox or single block request
        //==================================================================       
        /*$arr_chk = " id in ('" . implode("','",$blockids) . "') ";
        $query = " UPDATE ". PASSENGERS ." SET  user_status = 'D' WHERE $arr_chk ";
        $result = Db::query(Database::UPDATE, $query)->execute();
        return count($result);*/
        //MongoDB
        //Here changing array values with string to integers values
        $ids = Commonfunction::mongo_format_array($blockids);
        $set_array = [
            'user_status' => 'D'
        ];
        $result    = $this->mongo_db->update(MDB_PASSENGERS, [
            '_id' => [
                '$in' => $ids
            ]
        ], [
            '$set' => $set_array
        ], [
            'multiple' => true
        ]);
        //print_r($result); exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }

    public function p_block_passenger_request($blockids)
    {
        //check whether id is exist in checkbox or single block request
        //==================================================================       
        /*$arr_chk = " id in ('" . implode("','",$blockids) . "') ";
        $query = " UPDATE ". PASSENGERS ." SET  user_status = 'D' WHERE $arr_chk ";
        $result = Db::query(Database::UPDATE, $query)->execute();
        return count($result);*/
        //MongoDB
        //Here changing array values with string to integers values
        $ids = Commonfunction::mongo_format_array($blockids);
        $set_array = [
            'user_status' => 'PB'
        ];
        $result    = $this->mongo_db->update(MDB_PASSENGERS, [
            '_id' => [
                '$in' => $ids
            ]
        ], [
            '$set' => $set_array
        ], [
            'multiple' => true
        ]);
        //print_r($result); exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }

    public function active_passenger_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        /*	$arr_chk = " id in ('" . implode("','",$activeids) . "') ";
        $query = " UPDATE ". PASSENGERS ." SET  user_status = 'A' WHERE $arr_chk "; 
        $result = Db::query(Database::UPDATE, $query)
        ->execute();
        return count($result);*/
        $ids = Commonfunction::mongo_format_array($activeids);
        $set_array = [
            'user_status' => 'A'
        ];
        $result    = $this->mongo_db->update(MDB_PASSENGERS, [
            '_id' => [
                '$in' => $ids
            ]
        ], [
            '$set' => $set_array
        ], [
            'multiple' => true
        ]);
        //print_r($result); exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function trash_passenger_request($trashids)
    {
        //check whether id is exist in checkbox or single trash request
        //================================================================== 
        /*$arr_chk = " id in ('" . implode("','",$trashids) . "') ";
        $query = " UPDATE ". PASSENGERS ." SET  user_status = 'T' WHERE $arr_chk ";     
        $result = Db::query(Database::UPDATE, $query)
        ->execute();
        return count($result); */
        $ids = Commonfunction::mongo_format_array($trashids);
        $set_array = [
            'user_status' => 'T'
        ];
        $result    = $this->mongo_db->update(MDB_PASSENGERS, [
            '_id' => [
                '$in' => $ids
            ]
        ], [
            '$set' => $set_array
        ], [
            'multiple' => true
        ]);
        //print_r($result); exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function delete_passenger_request($deleteids)
    {
        // People delete 
        //==================
        /*$arr_chk = " id in ('" . implode("','", $deleteids) . "') ";
        $query   = " DELETE FROM " . PASSENGERS . "  WHERE $arr_chk ";
        $result  = Db::query(Database::DELETE, $query)->execute();
        return 1;*/
	
		//MongoDB
        //Here changing array values with string to integers values
        $active_ids = Commonfunction::mongo_format_array($deleteids);
        $result     = $this->mongo_db->remove(MDB_PASSENGERS, [
            '_id' => [
                '$in' => $active_ids
            ]
        ]);
        //echo '<pre>';print_r($result);exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
}
