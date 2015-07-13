<?php namespace application\hooks;


class PreController {

    function preload($instance,$controller, $method, $data)
    {
        $instance->bar = "Hello World";
        ///echo $controller . " pre loaded and $method triggered";
    }

    function postload($instance,$controller, $method, $data)
    {
        //echo $controller . " post loaded and $method triggered";
    }

}