<?php
defined('SYSPATH') OR die('No Direct Script Access');
Class Model_Cms extends Model
{
    public function __construct()
    {
        //MongoDB Instance
        $this->mongo_db = MangoDB::instance('default');
    }
    /*Get the CMS Content*/
    public function getcmscontent($content, $default_companyid = "")
    {
        $default_companyid = COMPANY_CID;
        //echo $content.'=='.$default_companyid;//exit;
        if ($default_companyid != 1) {
            $cms_result = $this->mongo_db->find_one(MDB_COMPANY, [
                'cid' => (int) $default_companyid,
                'cms.type' => 1,
                'cms.status' => 1,
                'cms.page_url' => $content
            ], [
                'cms.page_url' => 1,
                'cms.content' => 1,
                'cms.menu_name' => 1
            ]);
            $res        = [];
            //echo '<pre>';
            //print_r($cms_result);
            if (count($cms_result) > 0) {
                foreach ($cms_result['cms'] as $key => $val) {
                    if ($val['page_url'] == $content) {
                        $res[0]['page_url'] = $val['page_url'];
                        $res[0]['content']  = $val['content'];
                        $res[0]['menu']     = $val['menu_name'];
                    }
                }
            }
        } else {
			$array = [
                'content',
				'arabic_content',
                'meta_keyword',
                'meta_title',
                'meta_description',
                'menu',
				'arabic_menu_name'
            ];
			//echo $content;exit;
            $cms_result = $this->mongo_db->find_one(MDB_CMS, [
                'type' => "1",
                'status' => (int)1,
                'menu_link' => $content
            ], $array);
            $res        = $cms_result;
			/*echo '<pre>',print_r($cms_result);exit;
            foreach ($cms_result as $keys => $values) {
                $res[0][$keys] = $values;
            }*/
        }
       
        return $res;
    }
    /*Get the CMS Content*/
    public function getcompanycontent($pagename, $cid)
    {
        $contentcom = $this->mongo_db->find_one(MDB_COMPANY, [
            'cid' => $cid,
            'cms.page_url' => $pagename,
            'cms.status' => 1
        ]);
        $res        = [];
        foreach ($contentcom as $keys => $values) {
            $res[0][$keys] = $values;
        }
        return $res;
    }
    public function get_company_addr($cid)
    {
        $res = [];
        if ($cid != 1) {
            $contentcom = $this->mongo_db->find_one(MDB_COMPANY, [
                'cid' => $cid
            ], [
                'company_address'
            ]);
            foreach ($contentcom as $keys => $values) {
                $res[0][$keys] = $values;
            }
        }
        return $res;
    }
}
