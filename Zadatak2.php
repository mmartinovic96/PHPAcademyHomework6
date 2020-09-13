<?php


class Zadatak2
{
    private $data=[];

      public function __call($name, $arguments)
      {
          $action = substr($name,0,3);
          $option = substr($name,3);
          $args = implode('=',$arguments);

          if($action == 'set') $this->data[$option]=$args;
          if($action == 'has') return isset($this->data[$option]) ? 'true <br>':'false <br>' ;
          if($action == 'uns') unset($this->data[$option]);
          if($action == 'get') return $this->data[$option].'<br>';

          if(!$action)throw new \Exception("$name function doesnt exist <br>");


      }

}


$zad2= new Zadatak2();

try {
    echo $zad2->hasName('name');
    $zad2->hasName('name');
    $zad2->setName('name','leko');
    echo $zad2->hasName('name');
    echo $zad2->getName('name');
    $zad2->unsName('name');
    echo $zad2->hasName('name');
    }
    catch (\Exception $exception)
    {
    echo $exception->getMessage();
    }





