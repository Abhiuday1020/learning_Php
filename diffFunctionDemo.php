<?php

if(isset($var2)){
    echo "var2 is set<br/>";
 }else{
     echo "var2 is not set<br/>";
 }
 

$var = 546.76;

// echo gettype($var)."<br>";


// settype($var, 'integer');

// echo gettype($var),"<br>";

// echo $var."<br>";

// settype($var, 'string');

// echo gettype($var),"<br>";

// echo $var."<br";

unset($var);

if(isset($var)){
    echo "var is set<br/>";
}
else{
    echo "var is not set<br/>";
}