<?php
namespace application\controller;
use eaglehorn\Base;


class Welcome extends Base
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        //pushing data to template
        $data = array(
            'TITLE' => 'Welcome to Eaglehorn',
            'CONTENT' => 'Welcome.php',
            'HEADER' => ' Get Started !'
        );


        $template = $this->load->template('one_col', $data);
        $template->injectCSS(configItem('site')['viewurl'].'style.css');
        return $template->render();

    }


}

?>
