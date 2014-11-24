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
$config['site']['url'] = 'http://localhost/eaglehorn/public/';
                                                      

/* Root directory */
$config['site']['rootdir'] = dirname(dirname(__FILE__)).'/';

/* Application Directory */
$config['site']['appdir'] = $config['site']['rootdir'].'application/';

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
$config['session']['check_ip_address']         = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:"127.0.0.1";        // Will check the user's IP address against the one stored in the database. Make sure this is a string which is a valid IP address. FALSE by default.
$config['session']['check_user_agent']         = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:"";    // Will check the user's user agent against the one stored in the database. FALSE by default.


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


/* Cache directory */
$config['site']['cachedir'] = $config['site']['appdir'] . 'cache/';