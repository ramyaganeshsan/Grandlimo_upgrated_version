<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup ----
$split = explode('/',$_SERVER['REQUEST_URI']);

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Asia/Kuwait');
//date_default_timezone_set('America/New_York');
//mysql_query("SET `time_zone` = '".date('P')."'");
/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

ini_set('display_errors', 1);
ini_set ('gd.jpeg_ignore_warning', 1);
//ini_set('mongo.long_as_object', 1);
ini_set('mongo.native_long', 1);
// -- Configuration and initialization -------

/**
 * Set the default language
 */
I18n::lang('en-us');
Cookie::$salt = 'Taxi';

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}
//to set kohana environment (four environments - PRODUCTION, DEVELOPMENT, STAGING, TESTING)
Kohana::$environment = isset($_SERVER['KOHANA_ENV']) ? constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV'])) : Kohana::DEVELOPMENT;
    
/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
    'base_url'      => '/',
    'index_file'    => FALSE,
    'errors'        => TRUE,
    'profile'       => (Kohana::$environment == Kohana::DEVELOPMENT),
    'caching'       => (Kohana::$environment == Kohana::PRODUCTION)
));

set_exception_handler(array('Kohana_Exception', 'handler'));


/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    // 'auth'       => MODPATH.'auth',       // Basic authentication
    // 'cache'      => MODPATH.'cache',      // Caching with multiple backends
    // 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    // 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
    // 'unittest'   => MODPATH.'unittest',   // Unit testing
    // 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
    //'database'   	=> MODPATH.'database',// Database access
    'image'      	=> MODPATH.'image',// Image manipulation
    'commonfunction'=> MODPATH.'commonfunction', //common function added as module
    'message' 		=> MODPATH.'message', // error / success messages display
    'email' 		=> MODPATH.'email', //Email Sending purpose
    'pagination' 	=> MODPATH.'pagination', // Pagination
	//'debugtoolbar' 	=> MODPATH.'debugtoolbar', // debugtoolbar
    'mongoDB' 		=> MODPATH.'mangodb', 	// mongoDB
    'phpqrcode' 		=> MODPATH.'phpqrcode', 	// mongoDB
));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('error', 'error/<action>/<origuri>/<message>', array('action' => '[0-9]++', 'origuri' => '.+', 'message' => '.+'))
->defaults(array(
    'controller' => 'error',
    'action'     => 'index'
));
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'users',
		'action'     => 'index',
	));
Route::set('admin', '(<controller>(/<action>(/<id>/<method>)))')
	->defaults(array(
		'controller' => 'admin',
		'action'     => 'index',
		'method'     => NULL,
	));

Route::set('edit', '(<controller>(/<action>(/<id>/<method>/<lparam>)))')
	->defaults(array(
		'controller' => 'admin',
		'action'     => 'index',
		'method'     => NULL,
		'lparam'     => NULL,
	));

Route::set('aboutus', 'about-us.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'aboutus'
    ));

Route::set('blog', 'blog.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'blog'
    ));

Route::set('careers', 'careers.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'careers'
    ));

Route::set('support', 'support.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'support'
    ));


Route::set('Portfolios', 'portfolios.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'Portfolios'
    ));
	

Route::set('company-registration', 'company-registration.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'company_registration'
    ));

Route::set('advance-search', 'advance-search.html')
    ->defaults(array(
        'controller' => 'site/find',
        'action'     => 'advancesearch'
    ));

Route::set('search', 'search.html')
    ->defaults(array(
        'controller' => 'find',
        'action'     => 'search'
    ));

Route::set('how-it-works', 'how-it-works.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'demo'
    ));

Route::set('contact-us', 'contact-us.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'contactus'
    ));

Route::set('thankyou', 'thank-you.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'thankyou'
    ));

Route::set('free-trial-thank-you', 'free-trial-thank-you.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'trial_thankyou'
    ));
    

Route::set('livechat', 'livechat.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'contactuslive'
    ));

Route::set('demo', 'demo.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'demo'
    ));

Route::set('sitemap', 'sitemap.xml')
    ->defaults(array(
        'controller' => 'xmlsitemap',
        'action'     => 'index'
    ));
    
Route::set('features', 'features.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'features'
    ));

Route::set('pricing', 'pricing.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'pricing'
    )); 

Route::set('release', 'release-notes.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'release'
    ));

Route::set('vehicle-service', 'vehicle-assistance.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'vehicle_service'
    ));

Route::set('health-service', 'medical-assistance.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'health_service'
    ));

Route::set('delivery-service', 'delivery-assistance.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'delivery_service'
    ));

Route::set('taxi-service', 'taxi-booking-and-dispatching.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'taxi_service'
    ));

Route::set('home-service', 'home-assistance.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'home_service'
    ));

Route::set('case-studies', 'case-studies.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'case_studies'
    ));

Route::set('case-studies-details', 'case-study-details.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'case_study_details'
    ));

Route::set('solution', 'solutions.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'solutions'
    )); 

Route::set('casestudy-download', 'downloads.html')
	->defaults(array(
		'controller' => 'page',
		'action'     => 'casestudy_down',
	));
 
Route::set('caller-id', 'callerid.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'caller_id'
    ));   
    
Route::set('online-booking', 'onlinebooking.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'online_booking'
    ));  
    
Route::set('our-promise', 'ourpromise.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'our_promise'
    ));   
 
Route::set('privacy--policy', 'privacy-policy.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'privacy_policy'
    )); 

Route::set('package', 'package.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'package'
    )); 

Route::set('license', 'license-agreement.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'license'
    ));
    
Route::set('terms--conditions', 'terms-and-conditions.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'terms_conditions'
    )); 
    
Route::set('api', 'api.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'api'
    )); 

Route::set('faq', 'faq.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'faq'
    ));
Route::set('help', 'help.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'help'
    ));
   
Route::set('tutorial', 'tutorial.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'tutorial'
    ));
    

Route::set('taxi-booking-apps', 'taxibookingapps.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'taxi_booking_apps'
    ));

Route::set('knet_response', 'knet_response.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'knet_response'
    ));
Route::set('knet_wallet_response', 'knet_wallet_response.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'knet_wallet_response'
    ));
Route::set('tap_success', 'tap_success.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'tap_success'
    ));
Route::set('tap_error', 'tap_error.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'tap_error'
    ));
Route::set('tap_cancel', 'tap_cancel.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'tap_cancel'
    ));
Route::set('wallet_success', 'wallet_success.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'wallet_success'
    ));
Route::set('tap_error', 'wallet_error.html')
    ->defaults(array(
        'controller' => 'knetpayment',
        'action'     => 'wallet_error'
    ));	
Route::set('new_login', 'login.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'new_login'
    ));	 
Route::set('new_signup', 'signup.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'new_signup'
    ));	 

Route::set('meet_our_drivers', 'meet_our_drivers.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'meet_our_drivers'
    )); 
Route::set('how_it_works', 'how_it_works.html')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'how_it_works'
    ));   
Route::set('booking_success', 'booking-success.html')
    ->defaults(array(
        'controller' => 'users',
        'action'     => 'booking_success'
    ));       		
    
//Include defined Constants files
require Kohana::find_file('classes','table_config');
//require Kohana::find_file('classes','common_config'); 

$current_controller = ($split[1])?$split[1]:"";
//echo $current_controller;
//$ctrl = substr($current_controller, 0, -3);
//echo $ctrl;
//exit;

$pos = strpos($current_controller, 'mobileapi');
if($pos === false)
{
	//echo 'as';
	require Kohana::find_file('classes','common_config');
}

// GrandLimo Development
require APPPATH.'classes/kohana/app'.EXT; // Custom Kohana Helper File Written By Kumaresh
require APPPATH.'classes/helpers/app'.EXT; // Custom App Helper File Written By Kumaresh

