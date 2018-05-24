<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

abstract class Action
{
    protected $action;
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view, $layout=true)
    {
        $this->action = $view;
        if ($layout && file_exists("../Views/layout.phtml")) {
            include_once '../Views/layout.phtml';
        } else {
            $this->content($view);
        }
    }

    protected function content()
    {
        $atual = get_class($this);
        $singleClassName = strtolower(str_replace("Ebanx\\Controllers\\", "", $atual));
        include_once '../src/Ebanx/Views/' . $singleClassName . '/' . $this->action . '.phtml';
    }

}
