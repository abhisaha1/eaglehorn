<?php
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


