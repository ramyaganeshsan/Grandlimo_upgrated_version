<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains SITE ADMIN details


* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Hesabe extends Controller_Siteadmin
{
    /**
     ****__construct()****
     * Common Function in this controller
     */
    public function __construct(Request $request, Response $response)
    {
         parent::__construct($request, $response);
        //Session instance
        $this->session             = Session::instance();
        $this->usertype            = $this->session->get('user_type');
    }
    public function action_success() {
        echo "Success";
        exit; 
    }
    public function action_failure() {
        echo "Failure";
        exit; 
    }
}
