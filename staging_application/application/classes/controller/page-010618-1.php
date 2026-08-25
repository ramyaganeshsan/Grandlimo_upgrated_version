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

		//$content_cms = array('content'=>'content','arabic_content'=>'arabic_content');
		$careers_page_content = $this->cms->get_website_page_content('careers_page');

		$jobs_list = $this->cms->get_jobs_list();
		$view= View::factory(USERVIEW.'cms_pages')->bind('careers_page_content', $careers_page_content)->bind('lang',$this->lang)->bind('jobs_list', $jobs_list)->bind('cmscontent',$content_cms);
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
		//$content_cms = $this->cms->getcmscontent('features');
		$features_page_content = $this->cms->get_website_page_content('features_page');
		$view= View::factory(USERVIEW.'features_page')
					->bind('features_page_content', $features_page_content)->bind('lang',$this->lang);
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
		//$content_cms = $this->cms->getcmscontent('pricing');
		$pricing_page = $this->cms->get_website_page_content('pricing_page');
		$model_list = $this->cms->get_model_list();
		$view= View::factory(USERVIEW.'features')
					->bind('pricing_page', $pricing_page)->bind('lang',$this->lang)->bind('model_list',$model_list);
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
		$limit = 4;  
		if (isset($_GET["page"]) && is_numeric($_GET["page"]) ) {
			 $page  = $_GET["page"]; 
		} else {
			 $page=1; 
		}

		$start_from = ($page-1) * $limit; 

		$content_cms = $this->cms->getcmscontent('meet_our_drivers');
		$drivers_list = $this->cms->get_drivers_list($start_from,$limit);
		$drivers_count = $this->cms->get_drivers_count();
		//echo $drivers_count;exit;
		$view= View::factory(USERVIEW.'meet_our_drivers')
					->bind('cmscontent', $content_cms)->bind('lang',$this->lang)->bind('drivers_list',$drivers_list)->bind('drivers_count',$drivers_count)->bind('limit',$limit)->bind('page',$page);
		$this->template->content = $view;
	}
	public function action_how_it_works()
	{
		//$content_cms = $this->cms->getcmscontent('meet_our_drivers');
		$how_its_work_page = $this->cms->get_website_page_content('how_its_work_page');
		$view= View::factory(USERVIEW.'how_it_works')
					->bind('how_its_work_page', $how_its_work_page)->bind('lang',$this->lang);
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

	public function action_send_resume(){

		//print_r($_POST);print_r($_FILES);exit;

		$errors = array();
		$post_values = $_POST;
		/*$validator   = $this->cms->validate_resume_data($post_values, $_FILES);
		//print_r($validator->check());exit;
        if ($validator->check()) {

		        if (!empty($_FILES['resume_file']['name'])) {

		        	//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		        	if ($_FILES["resume_file"]["size"] > 2000000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}		           
		            $image_name = uniqid() . $_FILES['resume_file']['name'];		           
		            $filename   = Upload::save($_FILES['resume_file'], $image_name, DOCROOT . "public/resumes");
		        }

		}else{

			$errors = $validator->errors('errors');
		}*/

		//print_r($errors);exit;

		if (!empty($_FILES['resume_file']['name'])) {

        	//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        	if ($_FILES["resume_file"]["size"] > 2000000) {
			    //echo "Sorry, your file is too large.";
			    //$uploadOk = 0;
			    echo -1;exit;
			}

            $image_name = uniqid() . $_FILES['resume_file']['name'];		           
            $filename   = Upload::save($_FILES['resume_file'], $image_name, DOCROOT . "public/resumes");

            $name = isset($_POST['name'])?$_POST['name']:'';
            $email = isset($_POST['email'])?$_POST['email']:'';
            $phone = isset($_POST['phone'])?$_POST['phone']:'';

            if($name !="" && $email!="" && $phone!="" && filter_var($email, FILTER_VALIDATE_EMAIL)){

            	$status = $this->cms->add_resumes($post_values,$image_name);

            	$replace_variables =  array('##USER##'=> $name,REPLACE_SITEURL => URL_BASE,  REPLACE_COPYRIGHTS => SITE_COPYRIGHT, REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,REPLACE_SITENAME => $this->app_name);

            	$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'careers_request.html', $replace_variables);

                $from     = $this->siteemail;
                $to = $email;
                $subject  = 'Careers request - Website';
                $redirect = "";
                if (SMTP == 1) {
                    include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                } else {
                    // To send HTML mail, the Content-type header must be set
                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    // Additional headers
                    $headers .= 'From: ' . $from . '' . "\r\n";
                    $headers .= 'Bcc: ' . $to . '' . "\r\n";
                    mail($to, $subject, $message, $headers);
                }
                Message::success(__('job_applied_successfully'));
            	echo 1;exit;
            }

        }else{

        	echo 0;exit;
        }

        echo 0;exit;

	}
}
