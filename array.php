<?php

// traditinal array
// $guitar1 = ['Vela','Explorer','Strat'];

// echo $guitar1[0] ."<br>";

// if(isset($guitar1[4]))
// {
//     echo $guitar1[4];
// }
// else
// {
//     echo "guitar does not exist<br>";
// }

$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender'=> 'Strat',
];

if(isset($guitars2['prs'])){
    echo $guitars2['prs'];
}
else{
    echo "guitar does not exist<br>";
}