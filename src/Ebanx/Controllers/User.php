<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

use Ebanx\Includes\Container;

class User extends Action
{
    protected $model = 'User';

    public function login()
    {
        $model = Container::getClass($this->model);
        echo "<h1>leooo</h1>";
    }


}