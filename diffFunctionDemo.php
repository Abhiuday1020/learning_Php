<?php

$var = 546.76;

echo gettype($var)."<br>";


settype($var, 'integer');

echo gettype($var),"<br>";

echo $var."<br>";

settype($var, 'string');

echo gettype($var),"<br>";

echo $var."<br";


if(isset($var2)){
   echo "var2 is set";
}else{
    echo "var2 is not set";
}