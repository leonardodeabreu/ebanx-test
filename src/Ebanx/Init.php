<?php

namespace Ebanx;

use Ebanx\Includes\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['user-login'] = ['route' => '/', 'controller' => 'user', 'action' => 'login'];
        $ar['user-new'] = ['route' => '/user-new', 'controller' => 'user', 'action' => 'new'];
        $ar['user-register'] = ['route' => '/user-register', 'controller' => 'user', 'action' => 'register'];
        $ar['user-validate'] = ['route' => '/user-validate', 'controller' => 'user', 'action' => 'validate'];
        $ar['home'] = ['route' => '/home', 'controller' => 'user', 'action' => 'validate'];
        $ar['calculator'] = ['route' => '/calculator', 'controller' => 'calculator', 'action' => 'doOperation'];

        $this->setRoutes($ar);
    }
}
