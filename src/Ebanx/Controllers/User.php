<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

use Ebanx\Includes\Container;

class User extends Action
{
    protected $model = 'user';

    public function login()
    {
        $model = Container::getClass($this->model);

        $this->view->index  = 'teste leonardo';
        $this->render('login');
    }

    public function new()
    {
        $model = Container::getClass($this->model);

        $this->render('new');
    }

    public function register()
    {
        $user = [
            "name" => $_POST['name'],
            "login" => $_POST['login'],
            "email" => $_POST['email'],
            "password" => $_POST['password']
        ];

        $model = Container::getClass($this->model);
        $model->create($user);

        $this->view->sucess = true;
        $this->render('login');
    }


}