<?php declare(strict_types=1);

namespace Ebanx\Includes;

class Container
{
    private static function getDb(): \PDO
    {
        //$db = new \PDO("mysql:host=localhost;dbname=prova-ebanx", "root", "!@#Mudar");
        //$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        //return $db;
        return "";
    }

    public static function getClass($name, $data = "")
    {
        $str_class = "\\Ebanx\\Model\\" . ucfirst($name);

        if ($data != "")
            return new $str_class(self::getDb(), $data);

        //return new $str_class(self::getDb());
        return new $str_class();
    }
}