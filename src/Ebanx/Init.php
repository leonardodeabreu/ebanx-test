<?php declare(strict_types=1);

namespace Ebanx;

use Ebanx\Includes\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['user-login'] = ['route' => '/ebanx/', 'controller' => 'user', 'action' => 'login'];
        $ar['user-novo'] = ['route' => '/conta-bancaria/novo', 'controller' => 'index', 'action' => 'novo'];
        $ar['user-edit'] = ['route' => '/conta-bancaria/edit', 'controller' => 'index', 'action' => 'edit'];
        $ar['user-delete'] = ['route' => '/conta-bancaria/delete', 'controller' => 'index', 'action' => 'delete'];
        $ar['user-list'] = ['route' => '/conta-bancaria/delete', 'controller' => 'index', 'action' => 'delete'];
//echo "<pre>" . print_r($ar,true);
        $this->setRoutes($ar);
    }
}
