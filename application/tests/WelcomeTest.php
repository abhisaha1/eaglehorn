<?php

class WelcomeTest extends PHPUnit_Framework_TestCase
{


    function testWorkerTextHighlightsCode()
    {

        $base = new Eaglehorn\Base();
        $text = $base->load->worker('Text');
        $highlight = $text->codeHighlight('<p>');
        $pos = strpos($highlight, '>p<');
        $this->assertGreaterThan(10, $pos);

    }

    function testWelcomeIndexView()
    {

        $welcome = new application\controller\Welcome();

        //lets see if get header text welcome view
        $position = strpos($welcome->index(),'GET STARTED');

        $this->assertGreaterThan(0,$position, "Header Text was not found inside welcome view");

    }

}

