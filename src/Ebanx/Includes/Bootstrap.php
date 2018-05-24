<?php declare(strict_types = 1);

namespace Ebanx\Includes;

abstract class Bootstrap
{
    protected $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function run($url)
    {
        array_walk($this->routes, function ($route) use ($url) {
            if ($url === $route['route']) {
                $class = "Ebanx\\Controllers\\" . ucfirst($route['controller']);
                $controller = new $class;
                $action = (string)$route['action'];
                $controller->$action();
            }
        });
    }

    protected function getUrl()
    {
        $pattern = "#([a-zA-Z0-9\/]+)(\?.*)?#";
        return preg_replace($pattern, "$1", $_SERVER['REQUEST_URI']);
    }

}