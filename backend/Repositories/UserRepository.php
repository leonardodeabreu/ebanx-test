<?php

namespace App\Repositories;

class UserRepository
{
    private $entity;

    public function __construct($entity)
    {
        $this->entity = $entity;
    }
}