<?php
/**
 * EagleHorn
 *
 * An open source application development framework for PHP 5.5 or newer
 *
 * @package        EagleHorn
 * @author         Abhishek Saha <abhisheksaha11 AT gmail DOT com>
 * @license        Available under MIT licence
 * @link           http://eaglehorn.org
 * @since          Version 2.0
 * @filesource
 *
 * @desc           Configuration File.
 */

/* Set timezone */
date_default_timezone_set('Asia/Calcutta');

/*
|--------------------------------------------------------------------------
| Site URL
|--------------------------------------------------------------------------
|
| Change this to your site url
|
*/
$config['site']['url'] = 'http://dev.eaglehorn/';

/*
|--------------------------------------------------------------------------
| Directory Paths
|--------------------------------------------------------------------------
|
| You need not change this. However if you want the application folder to be
| something like app instead of application, feel free to change.
|
*/
$config['site']['rootdir'] = dirname(dirname(__FILE__)).'/';
$config['site']['appdir'] = $config['site']['rootdir'].'application/';

/*
|--------------------------------------------------------------------------
| Default Controller
|--------------------------------------------------------------------------
| The constructor or method with name index() will be triggered by default.
|
*/
$config['site']['default_controller'] = 'Welcome';

/*
|--------------------------------------------------------------------------
| Error Control
|--------------------------------------------------------------------------
|
| 0 - Turn off errors
| 1 - use php error module
| 2 - use eaglehorn error module
|
*/
$config['error'] = 2;

/*
|--------------------------------------------------------------------------
| Secret Key
|--------------------------------------------------------------------------
| This acts as salt for encrypting and decrypting strings
|
*/
$config['secret'] = '23##`!%^';


/*
|--------------------------------------------------------------------------
| Default Workers
|--------------------------------------------------------------------------
| Load these workers by default. They will be available in all controllers.
|
*/
$config['workers'] = array('Text');