<?php

namespace Ebanx\Includes;

abstract class Table
{
    protected $database;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->database = $db;
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table): void
    {
        $this->table = $table;
    }

    public function getAll()
    {

    }

    public function getById($id)
    {

    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

    public function create()
    {

    }

}