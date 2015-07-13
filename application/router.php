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
 * @desc File to add rules for routes
 */
namespace Eaglehorn;
//If you point to http://localhost/project/fancycontroller/fancymethod, you will still see the welcome page.

Router::route('/fancycontroller/fancymethod/<#user_id>', 'welcome/index');
Router::route('/test/<#test>', function($user) {
    View::show('welcome.php',array('user' => $user));
});
