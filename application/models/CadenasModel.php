<?php

namespace models;

class CadenasModel
{
    private $cadena1;
    private $cadena2;
    private $result;
    private $c1;
    private $c2;
    private $c3;

    public function __construct($cadena1, $cadena2)
    {
        $this->cadena1= $cadena1;
        $this->cadena2= $cadena2;
    }

    public function unir()
    {
        $this->result= $this->cadena1 . " - " . $this->cadena2;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function contarCadenas()
    {
        $this->c1= $this->cadena1.str_word_count();
        $this->c2= $this->cadena2.str_word_count();
    }

    public function sumaContarCadenas()
    {
        $this->c3= $this->c1 + $this->c2;
    }

    public function getSumaContarCadenas()
    {
        return $this->c3;
    }

    public function reverseString()
    {
        $this->c1= $this->cadena1.strrev();
        $this->c2= $this->cadena2.strrev();
    }


}