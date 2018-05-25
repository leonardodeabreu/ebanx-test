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
//echo "<pre>" . print_r($ar,true);die();
        $this->setRoutes($ar);
    }
}
