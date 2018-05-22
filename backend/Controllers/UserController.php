<?php

namespace App\Controller;

use App\Repositories;
use App\Entities;

class UserController
{

    public function verifyUserExists($_array)
    {
        $user = new Entities\User();
        $user->setLogin($_array[0]);
        $user->setPassword($_array[1]);

        $userRepo = new Repositories\UserRepository();
       // $userRepo
    }
}