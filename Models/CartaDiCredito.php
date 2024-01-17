<?php

class CartaDiCredito
{
    public int $numero;
    public int $pin;
    public $dataScadenza;

    public function __construct($numero, $pin, $dataScadenza)
    {
        $this->numero = $numero;
        $this->pin = $pin;
        $this->dataScadenza = $dataScadenza;
    }
}
