<?php


require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/CartaDiCredito.php';

class Utente extends Cliente
{
    public $username;
    public $password;
    public bool $registrato = true;
    public $cartaDiCredito;

    public function __construct($name, $username, $password, CartaDiCredito $cartaDiCredito)
    {
        $this->username = $username;
        $this->password = $password;
        $this->cartaDiCredito = $cartaDiCredito;
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
