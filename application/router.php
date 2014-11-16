<?php
namespace application;
use eaglehorn\core\controller as ehController;

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
 * @desc File to add rules for routes
 */

ehController\Router::route('/hello/sexy/', 'welcome/login');
