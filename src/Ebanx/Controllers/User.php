<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

use Ebanx\Includes\Container;

class User extends Action
{
    protected $model = 'User';

    public function login()
    {
        //$model = Container::getClass($this->model);

        $this->view->index  = 'teste leonardo';
        $this->render('login');
    }


}