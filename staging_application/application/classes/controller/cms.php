<?php defined('SYSPATH') or die('No direct script access.');
Class Controller_Cms extends Controller_Website
{
	public function __construct(Request $request,Response $response)
	{
		parent::__construct($request,$response);
		$siteusers = Model::factory('siteusers');
		$this->template=USERVIEW."template";
		
		
	}
	/** for about us pages**/
	public function action_aboutus()
	{
		$cms = Model::factory('cms');
		$contentcms = $cms->get_cmscontent();
		$content_cms = [];
		foreach($contentcms as $keys=>$values){
			$content_cms[0][$keys]=$values;
			
		}
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms);
					
		$this->template->content = $view;
	}
}
