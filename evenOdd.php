<?php

function findOddOrEven($number){
    if($number%2 == 0)
{
    echo "even number";
}
else
{
    echo "odd number";
}
}

$var = 79;
echo findOddOrEven($var);