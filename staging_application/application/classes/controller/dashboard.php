<?php defined('SYSPATH') or die('No direct script access.');

/************************************************

* Contains Dashboard(Site Statistics - Count) details

* @Package: Taximobility

* @Author: Taximobility Team

* @URL : http://ndot.in/

************************************************/

class Controller_Dashboard extends Controller_Siteadmin 
{

	/**
     ****__construct()****
     * Common Function in this controller
     */
    public function __construct(Request $request, Response $response)
    {
         parent::__construct($request, $response);
		
       	//import model
		$this->dashboard_model = Model::factory('dashboard');
		$this->taxidispatch_model	= Model::factory('taxidispatch');
		$this->admin_model = Model::factory('admin');
    }
	
	/**
	 * ****action_index()****
	 * @return user listings  view with pagination
	 */
	public function action_index()
	{
        	//set page title
		$this->page_title =  __('menu_dashboard');
		$this->selected_page_title = __('menu_dashboard');
		//auth login check
        $this->is_login();
		
		//send data to view file
		$view = View::factory('admin/dashboard')
				->bind('title',$title)
				->bind('dashboard',$model_dashboard);
		$this->template->content = $view;
	}

	public function action_getUsers()
	{
		$this->auto_render=false;
		$year = date('Y');
		if((!isset($_REQUEST['startdate'])) && (!isset($_REQUEST['enddate'])))
		{
			for ($i=1; $i<=12; $i++) {
				$count = $this->dashboard_model->getUsers($i, $year);
				if ($count == '' || $count == 'NULL') { $count = "0"; }
				$data['users'][] = array(
					'count'       => $count
				);
			}
		}
		else
		{
			$startdate = $_REQUEST['startdate'];
			$enddate = $_REQUEST['enddate'];
			$count = $this->dashboard_model->getUsersbydate($startdate, $enddate);		
			if ($count == '' || $count == 'NULL') { $count = "0"; }
				$data['users'][] = array(
			'count'       => $count
			);
		}
		$json = array();
		$json['success'] = $data;
		echo json_encode($json);
	}

	public function action_get_company_trip_count()
	{
		$this->auto_render=false;
		$year = date('Y');
		$webtrips = 0;
		$mobiletrips = 0;
		for ($i=1; $i<=12; $i++) {
			$month = ($i < 10) ? '0'.$i : $i;   
			$appwise = $this->dashboard_model->appwise_trips($month, $year);
			$count = 0;
			$revenues = 0;
			$admincommission = 0;
			$average = 0;
			if(count($appwise) > 0) {
				$count = $appwise[0]['total_trips'];
				$revenues = $appwise[0]['revenues'];
				$admincommission = $appwise[0]['admincommission'];
				$webtrips = $appwise[0]['webtrips'] + $webtrips;
				$mobiletrips = $appwise[0]['mobiletrips'] + $mobiletrips;
				$average = $count/$revenues;
			}
			
			$data['trips'][] = array(
				'trips'       => $count,
				'revenues'       => round($revenues,2),
				'admincommission'       => round($admincommission,2),
				'average'       => round($average,3)
			);
		}
		$data['webtrips'] = $webtrips;
		$data['mobiletrips'] = $mobiletrips;
		$json = array();
		//echo "<pre>"; print_r($data); exit;
		$json['success'] = $data;
		echo json_encode($json);
	}
	
	//** Function to get total users count companywise **//
	public function action_getallUsersCompanywise()
	{
		$data = array();
		if(isset($_POST['company'])) {
			$company_id = $_POST['company'];
			
			//$companies = $this->admin_model->get_company_details();//getting total company list
			//if(count($companies) > 0) {
				//foreach($companies as $comp){
					$company_name = '';
					$drivers = 0;
					$taxis = 0;
					$passengers = 0;
					$usersTaxies = $this->dashboard_model->getCompanyUsersTaxi($company_id);//getting total drivers, taxi, passengers
					if(count($usersTaxies) > 0) {
						$drivers = $usersTaxies[0]['_id']['totaldrivers'];
						$taxis = $usersTaxies[0]['_id']['totaltaxis'];
						$passengers = $usersTaxies[0]['_id']['totalpassengers'];
						$company_name = $usersTaxies[0]['_id']['company_name'];
					}
					$data['totalusers'][] = array('drivers' => $drivers,'taxis' => $taxis,'passengers' => $passengers);
				//}
			//}
			//print_r($data);exit;
			$data['companyName'] = $company_name;
		}
		$json = array();
		$json['success'] = $data;
		echo json_encode($json);exit;
	}
	
	public function action_total_trip_details_search()	
	{
		$post_values = $_POST;
		$startdate = $post_values['startdate'];
		$enddate = $post_values['enddate'];
		$company_id = isset($post_values['company']) ? $post_values['company'] : 1;
		$get_transaction = $this->dashboard_model->total_trip_details($company_id,$startdate,$enddate);
		
		//$get_company_details = $this->dashboard_model->get_company_details();
		$get_company_details      = $this->admin_model->get_company_details();
		
		$view= View::factory('admin/statistics/total_trip_revenue')
			->bind('post_values',$post_values)
			->bind('get_transaction',$get_transaction)
			->bind('get_company_details',$get_company_details);
		echo $view; exit;
	}
	
	public function action_driver_status_details_search()	
	{
		$driver_status = $_REQUEST['driver_status'];
		//$all_company_map_list = $this->taxidispatch_model->driver_status_details($driver_status);
		$all_company_map_list = $this->taxidispatch_model->driver_status_details($_REQUEST);
		
		$a=0;
		$b=5 ;
		$markers = array();
		if(count($all_company_map_list) > 0)
		{
			 foreach($all_company_map_list as $v)
			{
			    for($b=0;$b<5;$b++)
				{
					if($b==0)
					{  
						$markers[$a][$b]= $v['loc'][1];
					 }
					if($b==1)
					{
						$markers[$a][$b]=$v['loc'][0];
					}
					if($b==2)
					{ 
						//$markers[$a][$b]= '<div class="marker-info-win">'.'<div class="marker-inner-win"><span class="info-content"><b>'.__('driver_name').'</b> : '.$v['name'];
						$markers[$a][$b]= '<div class="info_content"><b>'.__('driver_name').'</b> : '.$v['name'];
					}
					if($b==3)
					{ $driver_status =($v['driver_status']=='F' && $v['shift_status']=='IN')?__('free_in'):(($v['driver_status']=='A')?"<span>".__('hired')."</span>":(($v['driver_status']=='B')?"<span>".__('trip_assigned')."</span>":__('free_out')));
					$txtcolor =($v['driver_status']=='F' && $v['shift_status']=='IN')? 'green':(($v['driver_status']=='A')? '#07841E':(($v['driver_status']=='B')? 'red':'#0F9ED6'));
					$markers[$a][$b]='<div id="bodyContent"><p><b>'.__('driver_status').'</b>: <b style="color:'.$txtcolor.';">'.$driver_status.'</b></p></div></div>';
					 }
					/*if($b==4)
					{ $shift_status=($v['shift_status']=='IN')?__('in'):__('out');
						$markers[$a][$b]= '';
					}*/
					if($b==4)
					{
						if($v['driver_status']=='F' && $v['shift_status']=='OUT'){
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_four.png';
						}elseif($v['driver_status']=='A'){
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_two.png';
						}elseif($v['driver_status']=='B'){
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_one.png';
						}elseif($v['driver_status']=='F' && $v['shift_status']=='IN'){
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_three.png';
						}
					}
					
				}
				$a++;
			 }  
		}
		 echo json_encode($markers);exit;
	}

	public function action_driver_status_details_search_company()	
	{
		$post_values = $_POST;
		//print_r($_REQUEST);exit;
		$driver_status = $_REQUEST['driver_status'];
		$company = $_REQUEST['company'];
		$all_company_map_list = $this->taxidispatch_model->driver_status_details_company($driver_status,$company);
		$a=0;
		$b=5 ;
		$markers = array();
		if(count($all_company_map_list) > 0)
		{
			 foreach($all_company_map_list as $v)
			{
				//print_r($v);
				for($b=0;$b<6;$b++)
				{
					if($b==0)
					{  
						$markers[$a][$b]= $v['latitude'];
					 }
					if($b==1)
					{
						$markers[$a][$b]=$v['longitude'];
					}
					if($b==2)
					{ 
						//$markers[$a][$b]= '<div class="marker-info-win">'+'<div class="marker-inner-win"><span class="info-content"><b>'.__('driver_name').'</b> : '.$v['name'];
						$markers[$a][$b]= '<div class="info_content"><b>'.__('driver_name').'</b> : '.$v['name'];
					}
					if($b==3)
					{ $driver_status =($v['driver_status']=='F')?__('Free'):(($v['driver_status']=='A')?"<span>".__('Hired')."</span>":__('Free'));
					$markers[$a][$b]='<div id="bodyContent"><p><b>'.__('driver_status').'</b>: <b style="color:green;">'.$driver_status.'</b>';
					 }
					if($b==4)
					{ $shift_status=($v['shift_status']=='IN')?__('in'):__('out');
						$markers[$a][$b]= '<b style="color:#0F9ED6;">'.$shift_status.'</b></p></div></div>';
					}
					if($b==5)
					{
						if($v['driver_status']=='F' && $v['shift_status']=='OUT'){
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_four.png';
						}elseif($v['driver_status']=='A'){
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_one.png';
						}else{
							$markers[$a][$b]= PUBLIC_IMGPATH.'/driver_two.png';
						}
					}
					
				}
				$a++;
			 }  //exit;
		}

		 echo json_encode($markers);exit;
	}

	public function action_get_admin_total_details()
	{
		$this->auto_render=false;
		$company_countlist = $dashboard->get_comapny_countlist();
		$passenger_countlist = $dashboard->count_passenger_list_history();
		$drivers_countlist = $dashboard->get_drivers_countlist();
		$availabletaxi_countlist = $dashboard->get_taxi_countlist();
		//echo $comapny_countlist."--".$passenger_countlist."--".$drivers_countlist."--".$availabletaxi_countlist;exit;
			
			if ($company_countlist == '' || $company_countlist == 'NULL'){ $company_countlist = "0"; } else { $company_countlist=$company_countlist; }
			if ($passenger_countlist == '' || $passenger_countlist == 'NULL') { $passenger_countlist = "0"; } else { $passenger_countlist=$passenger_countlist; }
			if ($drivers_countlist == '' || $drivers_countlist == 'NULL') { $drivers_countlist = "0"; } else { $drivers_countlist=$drivers_countlist; }
			if ($availabletaxi_countlist == '' || $availabletaxi_countlist == 'NULL') { $availabletaxi_countlist = "0"; } else { $availabletaxi_countlist=$availabletaxi_countlist; }
			
			$data['latest_details'][] = array(
				'company_countlist' => "['Total Companies (".$company_countlist.")',".$company_countlist."]",
				'passenger_countlist' => "['Total passengers (".$passenger_countlist.")',".$passenger_countlist."]",
				'drivers_countlist' => "['Total Drivers (".$drivers_countlist.")',".$drivers_countlist."]",
				'availabletaxi_countlist' => "['Total Taxies (".$availabletaxi_countlist.")',".$availabletaxi_countlist."]"
			);
			
		$json = array();
		$json['success'] = $data;
		echo json_encode($json);
	}

	public function action_get_admin_latest_details()
	{
		$this->auto_render=false;
		$activeusers_list_count = $dashboard->get_activeusers_list_count();
		$availabletaxi_list_count = $dashboard->get_availabletaxi_list_count();
		$freedriver_list_count = $dashboard->free_driver_list_count();
		$freetaxi_list_count = $dashboard->free_taxi_list_count();
		//echo $activeusers_list_count."--".$availabletaxi_list_count."--".$freedriver_list_count."--".$freetaxi_list_count;exit;
			
			if ($activeusers_list_count == '' || $activeusers_list_count == 'NULL'){ $activeusers_list_count = "0"; } else { $activeusers_list_count=$activeusers_list_count; }
			
			if ($availabletaxi_list_count == '' || $availabletaxi_list_count == 'NULL') { $availabletaxi_list_count = "0"; } else { $availabletaxi_list_count=$availabletaxi_list_count; }
			
			if ($freedriver_list_count == '' || $freedriver_list_count == 'NULL') { $freedriver_list_count = "0"; } else { $freedriver_list_count=$freedriver_list_count; }
			
			if ($freetaxi_list_count == '' || $freetaxi_list_count == 'NULL') { $freetaxi_list_count = "0"; } else { $freetaxi_list_count=$freetaxi_list_count; }
			
			$data['latest_details'][] = array(
				'activeusers_list_count' => "['Live Passengers (".$activeusers_list_count.")',".$activeusers_list_count."]",
				'availabletaxi_list_count' => "['Today Unassigned Taxies (".$freetaxi_list_count.")',".$freetaxi_list_count."]",
				'freedriver_list_count' => "['Today Unassigned Drivers (".$freedriver_list_count.")',".$freedriver_list_count."]",
				'freetaxi_list_count' => "['Today Free Taxies (".$availabletaxi_list_count.")',".$availabletaxi_list_count."]"
			);
			
		$json = array();
		$json['success'] = $data;
		echo json_encode($json);
	}
	

} // End Welcome

