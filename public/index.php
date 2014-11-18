<?php namespace eaglehorn;
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
 * @desc  Index file
 *
 */


require '../start/autoload.php';

class index
{

    public function __construct()
    {

    }

    public function index($args)
    {

        echo 'This is the index page, shown by default to all requests that cannot be routed';
    }


}

?>
