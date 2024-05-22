<?php

$guitar = ['Vela','Explorer','Strat'];

echo $guitar[0] ."<br>";

if(isset($guitar[4]))
{
    echo $guitar[4];
}
else
{
    echo "guitar does not exist<br>";
}

?> 