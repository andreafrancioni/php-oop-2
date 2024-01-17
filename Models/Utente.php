<?php


require_once __DIR__ . '/Cliente.php';

class Utente extends Cliente
{
    public $username;
    public $password;
    public bool $registrato = true;

    public function __construct($name, $username, $password)
    {
        parent::__construct($name);
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
