<?php
namespace application\model;

use Eaglehorn\Model;
use R;

/**
 * Class UserModel
 * @package application\model
 */
class UserModel extends Model
{

    /**
     * @return int|string
     * @throws \RedBeanPHP\RedException
     */
    function insertUser()
    {
        $users = R::dispense('users');
        $users->fname = 'Abhishek';
        $users->lname = 'Saha';
        return R::store($users);
    }


}





