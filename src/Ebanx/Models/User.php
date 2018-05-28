<?php

namespace Ebanx\Models;

use Ebanx\Includes\Table;

class User extends Table
{
    protected $table = 'user';

    private $id;
    private $name;
    private $login;
    private $password;
    private $email;
    private $created_at;
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    //

    public function verifyUser(array $_login): bool
    {
        $sql = "SELECT * FROM user WHERE login = :login AND password = :password";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':login', $_login['login']);
        $statement->bindParam(':password', $_login['password']);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            $this->sessionRegister($statement->fetchObject());
            return true;
        }

        return false;
    }

    public function sessionRegister(\stdClass $entity): void
    {
        session_start();
        $_SESSION['user'] = $entity;
    }

}