<?php
namespace application\controller;
use Eaglehorn\Base;

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
            'CONTENT' => 'welcome.php',
            'HEADER' => ' Get Started !'
        );

        $template = $this->load->template('one_col', $data);
display($this);
        $template->injectCSS('styles/style.css');
        return $template->render();

    }

    function insertUser()
    {
        $user = $this->load->model('UserModel');
        echo $user->insertUser();
    }

}

?>
