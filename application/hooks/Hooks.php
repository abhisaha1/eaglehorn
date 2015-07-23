<?php namespace application\hooks;

class Hooks
{

    function notFound()
    {
        \Eaglehorn\View::show('404.php');
    }

}