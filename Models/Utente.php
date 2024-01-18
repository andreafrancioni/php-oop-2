<?php


require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/CartaDiCredito.php';

class Utente extends Cliente
{
    public $username;
    public $password;
    public bool $registrato = true;
    public int $sconto = 20;
    public $cartadicredito;

    public function __construct($username, $password, CartaDiCredito $cartadicredito)
    {
        $this->username = $username;
        $this->password = $password;
        $this->cartadicredito = $cartadicredito;
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
