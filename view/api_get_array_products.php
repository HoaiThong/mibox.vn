<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../dao/productUtils.php';
require_once '../dao/DAO.php';
require_once '../model/product.php';
$util=new ProductUtil();
$dao=new Dao();
$array=$util->get_array_product("1");
print_r($array);
$myobject = $dao->arrayToObject($array);
print_r($myobject);
$o=(object)$array;
print_r($o);
foreach ($o as $product) {
       echo 'This car is a ' . $product->idStore . ' ' . $car->skuProduct . "\n";
}