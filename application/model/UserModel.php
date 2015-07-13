<?php
namespace application\model;
use Eaglehorn\Model;
use R;

class UserModel extends Model {

    function insertUser()
    {
        $users = R::dispense('users');
        $users->fname = 'Abhishek';
        $users->lname = 'Saha';
        return R::store($users);
    }


}




