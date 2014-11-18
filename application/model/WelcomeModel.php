<?php
namespace application\model;
use Eaglehorn\Model;

class WelcomeModel extends Model
{

    function __construct()
    {

        parent::__construct();

    }

    function read()
    {
        $this->print = true;
        $bind[':email'] = 'abhisheksaha11@gmail.com';

        return $this->select('users');

    }

} 