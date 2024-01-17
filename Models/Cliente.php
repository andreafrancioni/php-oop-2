<?php

class Cliente
{
    public $name;
    public int $sconto = 0;
    public bool $registrato = false;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
