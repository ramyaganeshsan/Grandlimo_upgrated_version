<?php defined('SYSPATH') or die('No direct script access.');
Class Controller_Page extends Controller_Website
{
	public function __construct(Request $request,Response $response)
	{
		parent::__construct($request,$response);
		//$siteusers = Model::factory('siteusers');
		$this->cms = Model::factory('cms');
		$this->template=USERVIEW."template";
		
		//passengers model
        $id =$this->session->get('id');  
	}
	/** for about us pages**/
	public function action_aboutus()
	{
		//echo '7777';exit;
		$content_cms = $this->cms->getcmscontent('about-us');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_blog()
	{
		//echo '7777';exit;
		$content_cms = $this->cms->getcmscontent('blog');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_careers()
	{
		//echo '7777';exit;
		$content_cms = $this->cms->getcmscontent('careers');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_support()
	{
		//echo '7777';exit;
		$content_cms = $this->cms->getcmscontent('support');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}
        
    public function action_Portfolios()
	{
		$content_cms = $this->cms->getcmscontent('portfolios');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_package()
	{
		$content_cms = $this->cms->getcmscontent('package');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_release()
	{
		$content_cms = $this->cms->getcmscontent('release-notes');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

		
	public function action_vehicle_service()
	{
		$content_cms = $this->cms->getcmscontent('vehicle-assistance');
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_case_studies()
	{
		$content_cms = $this->cms->getcmscontent('case-studies');
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_case_study_details()
	{
		$casestudy_detail=arr::get($_REQUEST,'casestudy');
		$content_cms = $this->cms->getcmscontent($casestudy_detail);
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_home_service()
	{
		$content_cms = $this->cms->getcmscontent('home-assistance');
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_health_service()
	{
		$content_cms = $this->cms->getcmscontent('medical-assistance');
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_delivery_service()
	{
		$content_cms = $this->cms->getcmscontent('delivery-assistance');
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_taxi_service()
	{
		$content_cms = $this->cms->getcmscontent('taxi-booking-and-dispatching');
		$view= View::factory(USERVIEW.'web_cms')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}

	public function action_casestudy_down()
	{
		$filename=$_GET['filename'];
		$filenames = DOCROOT.'public/case_study_document/'.$filename;
		if (file_exists($filenames))
		{ 
			$download = DOCROOT.'public/case_study_document/'.$filename;
			ignore_user_abort(true);
			set_time_limit(0); // disable the time limit for this script
			$fullPath = $download;
			
			if ($fd = fopen ($fullPath, "r")) {
				$fsize = filesize($fullPath);
				$path_parts = pathinfo($fullPath);
				$ext = strtolower($path_parts["extension"]);
				switch ($ext) {
					case "pdf":
						header("Content-type: application/pdf");
						header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
						break;
					default;
						header("Content-type: application/octet-stream");
						header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
						break;
				}
				header("Content-length: $fsize");
				header("Cache-control: private"); //use this to open files directly
				while(!feof($fd)) {
					$buffer = fread($fd, 2048);
					echo $buffer;
				}
			}
			fclose ($fd);
			exit;
		} else {
			$this->request->redirect("/");
		}
	}

	public function action_license()
	{
		$content_cms = $this->cms->getcmscontent('license-agreement');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";		
		$this->template->content = $view;
	}
	
	/** for features pages**/
	public function action_features()
	{
		$content_cms = $this->cms->getcmscontent('features');
		$view= View::factory(USERVIEW.'features_page')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}

	public function action_demo()
	{
		//$content_cms = $this->commonmodel->getcontents('demo');
		$content_cms = $this->cms->getcmscontent('demo');
		$view= View::factory(USERVIEW.'features')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}
	
	/** for pricing pages**/
	public function action_pricing()
	{
		$content_cms = $this->cms->getcmscontent('pricing');
		$model_list = $this->cms->get_model_list();
		$view= View::factory(USERVIEW.'features')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang)->bind('model_list',$model_list);
		$this->template->content = $view;
	}

	/** for Solutions pages**/
	public function action_solutions()
	{
		$content_cms = $this->cms->getcmscontent('solutions');
		$view= View::factory(USERVIEW.'features')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}

	/** for Online Booking pages**/
	public function action_online_booking()
	{
		$content_cms = $this->cms->getcmscontent('Online Booking');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}
	
	/** for Caller Id pages**/
	public function action_caller_id()
	{
		$content_cms = $this->cms->getcmscontent('Caller Id');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms);
		$this->template->content = $view;
	}
	
	/** for Our Promise pages**/
	public function action_our_promise()
	{
		$content_cms = $this->cms->getcmscontent('Our Promise');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}
	
	/** for Our action_privacy_policy pages**/
	public function action_privacy_policy()
	{
		$content_cms = $this->cms->getcmscontent('privacy-policy');
		//echo '<pre>';print_r($content_cms);exit;
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";
					
		$this->template->content = $view;
	}
	
	/** for Our Terms & conditions pages**/
	public function action_terms_conditions()
	{
		$content_cms = $this->cms->getcmscontent('terms-and-conditions');		
		//echo '<pre>';print_r($content_cms);exit;
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";
					
		$this->template->content = $view;
	}
	
	/** for Our API pages**/
	public function action_api()
	{
		$content_cms = $this->cms->getcmscontent('Api');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
					
		$this->template->content = $view;
	}

	/** for Help pages**/
	public function action_help()
	{
		$content_cms = $this->cms->getcmscontent('help');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}
		
	/** for Tutorial pages**/
	public function action_tutorial()
	{
		$content_cms = $this->cms->getcmscontent('tutorial');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}

	/** for Our taxi_booking_apps pages**/
	public function action_taxi_booking_apps()
	{
		
		$content_cms = $this->cms->getcmscontent('Taxi Booking Apps');
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}

	public function action_companycms()
	{
        $uri=$this->request->uri();
        $page_name=current(explode('.',$uri));
        //echo $page_name;
		
		$content_cms = $this->cms->getcompanycontent($page_name,COMPANY_CID);
		View::bind_global('cmscontent',$content_cms);
		$view= View::factory(USERVIEW.'company_pages');

		$this->meta_title=$content_cms[0]['meta_title'];
		$this->meta_keywords=$content_cms[0]['meta_keyword']; //
		$this->meta_description=$content_cms[0]['meta_description']; //	
		$this->template->content = $view;
	}

	/** for FAQ pages**/
	public function action_faq()
	{
		$content_cms = $this->cms->getcmscontent("faq");
		$view= View::factory(USERVIEW.'cms_pages')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}

	/** for Solutions pages**/
	public function action_meet_our_drivers()
	{
		$content_cms = $this->cms->getcmscontent('meet_our_drivers');
		$view= View::factory(USERVIEW.'meet_our_drivers')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}
	public function action_how_it_works()
	{
		$content_cms = $this->cms->getcmscontent('meet_our_drivers');
		$view= View::factory(USERVIEW.'how_it_works')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang);
		$this->template->content = $view;
	}

	/** How it Works **/
	/*public function action_demo()
	{
		$customer_content = $this->commonmodel->getcontents('customer');
		$driver_content = $this->commonmodel->getcontents('driver');
		$company_content = $this->commonmodel->getcontents('company');
		$left_content = $this->commonmodel->getcontents('demo-left');
		$view= View::factory(USERVIEW.'demo')
				->bind('customer_content', $customer_content)
				->bind('driver_content', $driver_content)
				->bind('company_content', $company_content);
		$this->template->content = $view;
	}
	*/

	/** How it Works 
	public function action_demos()
	{
		$view= View::factory(USERVIEW.'demos');
		$this->template->content = $view;
	}**/
}
