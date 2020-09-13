<?php

class Zadatak1
{
    private $g;
    private $s;


    public function __construct($g=null,$s=null)
    {
        $this->g = $g;
        $this->s = $s;

    }

    public function __set($name, $value)
    {if(property_exists(self::class,$name)) {
        switch ($name) {
            case "g":
                $this->g = $value;
                break;
            case "s":
                $this->s = $value;
                break;
        }
    }
            return "Property doesn't exist";

    }

    public function __get($name)
    {
        switch ($name){
            case "g":
                $this->g;
                break;
            case "s":
                $this->s;
                break;
                }
    }

}

$zad = new Zadatak1('ivica');
var_dump($zad);
$zad->g='javorka';
$zad->s='korika';
var_dump($zad);
