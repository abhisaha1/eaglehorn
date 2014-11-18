<?php
/**
 * EagleHorn
 *
 * An open source application development framework for PHP 5.4+ or newer
 *
 * @package        EagleHorn
 * @author        Abhishek Saha <abhisheksaha11 AT gmail DOT com>
 * @license        Available under MIT licence
 * @link        http://eaglehorn.org
 * @since        Version 1.0
 * @filesource
 *
 *
 * @desc  Autoload
 *
 */

define('root', dirname(dirname(__FILE__)).'/');
define('eaglehorn',root . 'vendor/ajaxtown/eaglehorn_framework/src/eaglehorn/');

require root . 'vendor/autoload.php';
require eaglehorn . 'bootstrap/bootstrap.php';