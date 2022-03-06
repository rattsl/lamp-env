<?php

class Person {
  public $name;
  public $age;

  function __construct($name, $age)
  {
    $this -> name = $name;
    $this -> age = $age;
  }

  function callName(){
    echo "hello" . $this -> name ;
  }

  function callAge(){
    echo "you are " . $this -> age ;
  }
}

$taro = new Person("taro", 29);
$taro -> callName();
$taro -> callAge();

$hanako = new Person("hanako", 20);
$hanako -> callName();
