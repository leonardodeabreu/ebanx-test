<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

use Ebanx\Includes\Container;

class Calculator extends Action
{
    protected $model = 'calculator';

    public function doOperation()
    {
        $model = Container::getClass($this->model);

        $operation = $_POST['display'];
        $first = substr($operation,1,1);
        if ($first ===  '(')



        eval($operation);
        echo "<pre>" . print_r($_POST,true);

    }

}