<?php
/**
 * EagleHorn
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package        EagleHorn
 * @author        Abhishek Saha <abhisheksaha11 AT gmail DOT com>
 * @license        Available under MIT licence
 * @link        http://eaglehorn.org
 * @since        Version 1.0
 * @filesource
 *
 * @desc Configuration File.
 */

/* Set timezone */
date_default_timezone_set('Asia/Calcutta');

/**
 * Error
 *
 * 0 - Turn off errors
 * 1 - use php error module
 * 2 - use eaglehorn error module
 */
$config['error'] = 2;


/**
 * Application URL. eg. http://localhost/My-Application-Root-Dir
 */
$config['site']['url'] = 'http://localhost/eaglehorn_app/';


/* Root directory */
$config['site']['rootdir'] = dirname(dirname(__FILE__)).'/';


/**
 * Logger configurations
 */
$config['logger']['activate'] = 1;

$config['logger']['file'] = $config['site']['rootdir'] . 'application/logs/'; //should have write permission

//0-emergency, 1-alert, 2-critical, 3-error, 4-warning, 5-notice, 6-info, 7-debug
$config['logger']['level'] = 'debug';


/**
 * Secure Secret
 * This acts as salt for encrypting and decrypting strings
 */
$config['secret'] = '23##`!%^';


/**
 * Default controller
 * The constructor or method with name index() will be triggered by default.
 */
$config['site']['default_controller'] = 'Welcome';


/**
 * Load these workers by default
 */
$config['workers'] = array('Text');


/**
 * Session related configurations
 * Only if you are using dbsession worker
 */
$config['session']['table']                    = 'sessions';
$config['session']['cookie_name']              = 'session_cookie'; // Name of the cookie
$config['session']['table_name']               = 'sessions';       // Database table name
$config['session']['seconds_till_expiration']  = 7200;             // How many seconds it takes before the session expires. Default is 2 hours.
$config['session']['renewal_time']             = 300;              // How many seconds it takes before the session ID is renewed. Default is 5 minutes.
$config['session']['expire_on_close']          = FALSE;            // The session is terminated when the browser is closed.
$config['session']['secure_cookie']            = FALSE;            // Decides whether the cookie should only be set when a HTTPS connection exists.
$config['session']['check_ip_address']         = $_SERVER['REMOTE_ADDR'];        // Will check the user's IP address against the one stored in the database. Make sure this is a string which is a valid IP address. FALSE by default.
$config['session']['check_user_agent']         = $_SERVER['HTTP_USER_AGENT'];    // Will check the user's user agent against the one stored in the database. FALSE by default.


/**
 * Mysql configurations
 */

$config['mysql']['host'] = 'localhost';

$config['mysql']['user'] = 'root';

$config['mysql']['password'] = '';

$config['mysql']['db'] = 'blog';

/**
 * Mail configuration
 */

$config['mail']['mailer'] = 'mail'; //sendmail, mail, smtp

$config['mail']['smtp_auth'] = true;

$config['mail']['ssl'] = false;

$config['mail']['smtp_debug'] = false;

$config['mail']['host'] = '';

$config['mail']['port'] = '';

$config['mail']['uname'] = '';

$config['mail']['pwd'] = '';



/* System directory */
$config['site']['coredir'] = 'vendor/ajaxtown/eaglehorn_framework/core/';

/* Application directory */
$config['site']['appdir'] = $config['site']['rootdir'].'application/';

/* Custom Controller directory */
$config['site']['cust_controller_dir'] = $config['site']['appdir'].'controller/';

/* System Controller directory */
$config['site']['core_controller_dir'] = $config['site']['coredir'] . 'controller/';

/* View directory */
$config['site']['viewdir'] = $config['site']['appdir'] . 'view/';

/* View URL */
$config['site']['viewurl'] = $config['site']['url'] . 'application/view/';

/* Custom Model directory */
$config['site']['modeldir'] = $config['site']['appdir'] . 'model/';

/* Template directory */
$config['site']['templatedir'] = $config['site']['appdir'] . 'templates/';

/* Worker directory */
$config['site']['workerdir'] = $config['site']['coredir'] . 'worker/';

/* Assembly directory */
$config['site']['assemblydir'] = $config['site']['coredir'] . 'assembly/';

/* Assembly URL */
$config['site']['assemblyurl'] = $config['site']['coredir'] . 'assembly/';

/* Cache directory */
$config['site']['cachedir'] = $config['site']['coredir'] . 'cache/';