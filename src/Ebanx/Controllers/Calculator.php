<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

class Calculator
{
    private $total;
    private $n1;
    private $n2;

    function __construct()
    {
        $this->total = 0;
        $this->n1 = 0;
        $this->n2 = 0;
    }

    public function setNum1($pNum1)
    {
        $this->n1 = $pNum1;
    }

    public function setNum2($pNum2)
    {
        $this->n2 = $pNum2;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function sum()
    {
        $this->total = $this->n1 + $this->n2;
    }

    public function subtract()
    {
        $this->total = $this->n1 - $this->n2;
    }

    public function multiply()
    {
        $this->total = $this->n1 * $this->n2;
    }

    public function split ()
    {
        $this->total = $this->n1 / $this->n2;
    }

}