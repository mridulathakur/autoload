<?php
//require "autoload/first.php";
//require "autoload/second.php";

function __autoload($class){
    require "autoload/ " . $class .  ".php";
}
$test =new second();
?>