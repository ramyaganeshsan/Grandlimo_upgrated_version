<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Share extends Controller_Siteadmin
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->manage_model   = Model::factory('manage');
    }
    public function action_location() {

        $data = isset($_GET['data']) ? $_GET['data'] : "";
        $data = !empty($data) ? (array)json_decode(base64_decode($data, true)) : "";
        
        $details = [];
        
        if(isset($data['trip_id']) && isset($data['passenger_id'])) {
            $details = $this->manage_model->getTripDetails($data['trip_id']);
            if(count($details) <= 0 || (isset($details[0]['travel_status']) && $details[0]['travel_status'] != 2 )){
                http_response_code(404);
                echo "404 NOT FOUND!"; 
                die();
            }  
        } else {
            http_response_code(404);
            echo "404 NOT FOUND!"; 
            die();
        }
        
        $this->page_title = __('Share Location');
        $this->selected_page_title = __('Share Location');
        $view = View::factory('share_location')->bind('details', $details);
        $this->template->title      = SITENAME . " | " . __('Share Loacation');
        $this->template->page_title = __('Share Loacation');
        $this->template->content    = $view;
    }

    public function action_get_location() {
        $driver_id = isset($_POST['driver_id']) && !empty($_POST['driver_id']) ? $_POST['driver_id'] : "";
        $trip_id = isset($_POST['trip_id']) && !empty($_POST['trip_id']) ? $_POST['trip_id'] : "";
        
        $getTravelStatus = $this->manage_model->getTravelStatus($trip_id);

        if(($getTravelStatus['_id'] && $getTravelStatus['travel_status'] != 2)) {
            echo json_encode(["status" => 2, "lat" => "", "lng" => ""]);
            exit;
        }

        $driverLocation = $this->manage_model->getDriverCurrentLocation($driver_id);
        if ($driver_id && $driverLocation && isset($driverLocation['_id'])) {
            $lat = isset($driverLocation['loc']['coordinates'][1]) ? $driverLocation['loc']['coordinates'][1] : "";
            $lng = isset($driverLocation['loc']['coordinates'][0]) ? $driverLocation['loc']['coordinates'][0]: "";
            echo json_encode(["status" => 1, "lat" => $lat, "lng" => $lng]);

        } else {
            echo json_encode(["status" => 0, "lat" => "", "lng" => ""]);
        }
        exit;
      }
}




