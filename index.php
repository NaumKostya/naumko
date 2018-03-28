<?php

spl_autoload_register(function ($class){
    //echo 'first';
    $classFileName = 'vendor'.DIRECTORY_SEPARATOR.$class.'.php';
    if(file_exists($classFileName)){
    include_once $classFileName;
    return true;
    }
    return false;
});

$testObj= new test();
$testObj->name='Vasya';
var_dump($testObj);
echo ($testObj->name);