<?php
namespace application;

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

//If you point to http://localhost/project/fancycontroller/fancymethod, you will still see the welcome page.

\Eaglehorn\Router::route('/fancycontroller/fancymethod', 'welcome/index');
