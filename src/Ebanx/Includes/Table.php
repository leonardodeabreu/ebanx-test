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

    public function create(array $data): int
    {
        try {
            $sql = $this->buildInsert($data);
            $statement = $this->database->prepare($sql);

            $index = 1;
            foreach ($data as $value) {
                $statement->bindValue($index, $value);
                $index++;
            }

            $statement->execute();

            return $this->database->lastInsertId();
        } catch (\PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function buildInsert(array $data): string
    {
        $columns = "";
        $values = "";

        foreach ($data as $column => $value) {
            $columns .= $column . ', ';
            $values .= '?, ';
        }

        $columns = (substr($columns, -2) == ', ') ? trim(substr($columns, 0, (strlen($columns) - 2))) : $columns;
        $values = (substr($values, -2) == ', ') ? trim(substr($values, 0, (strlen($values) - 2))) : $values;

        return trim("INSERT INTO " . $this->getTable() . " (" . $columns . ") VALUES (" . $values . ")");
    }

}