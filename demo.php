<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Car
{
       public $color;
       public $type;
}
function array_to_obj($array, &$obj)
  {
    foreach ($array as $key => $value)
    {
      if (is_array($value))
      {
      $obj->$key = new stdClass();
      array_to_obj($value, $obj->$key);
      }
      else
      {
        $obj->$key = $value;
      }
    }
  return $obj;
  }
 
function arrayToObject($array)
{
 $object= new stdClass();
 return array_to_obj($array,$object);
}

$myCar = new Car();
$myCar->color = 'red';
$myCar->type = 'sedan';

$yourCar = new Car();
$yourCar->color = 'blue';
$yourCar->type = 'suv';

$cars = array($myCar);
$cars[]=$myCar;
$cars[]=$yourCar;
$cars[]=$myCar;

foreach ($cars as $car) {
       echo 'This car is a ' . $car->color . ' ' . $car->type . "\n";
}

