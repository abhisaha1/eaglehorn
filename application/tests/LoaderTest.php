<?php

class LoaderTest extends PHPUnit_Framework_TestCase
{

    function testLoadController()
    {

        $base = new Eaglehorn\Base();
        $welcomeController = $base->load->controller('Welcome');
        $expected = new application\controller\Welcome();
        $this->assertEquals($welcomeController->load, $expected->load);

    }

}

