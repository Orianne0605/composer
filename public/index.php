<?php


use App\Wcs\Hello;
use HelloWorld\SayHello;

require_once('../vendor/autoload.php');
         
$object = new Hello();
echo $object->talk();

$object2 = new SayHello();
echo $object2->world();





