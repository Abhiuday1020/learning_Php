<?php
   $title = "function";

   $guitars = [
    ['name' => 'Vela', 'manufacturer' => 'Prs'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'fender'],
   ];
   $greeting = "Hello world";

   function pluck($arr, $key) {
    $result = array_map("return_name", $arr);
    return $result;
  }

  function return_name($item){
    return $item['name'];
  }
   $guitar_names = pluck($guitars,'name');

   function sum ($a,$b){
    global $greeting;
    echo $greeting."<br>";
    $c = $a + $b;
    return $c;
   }

   echo 'abhi';
   $result = sum(42,83);

   echo $result;
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <?php
    $ans = sum(5,2);
    print_r($ans);
    ?>
</body>
</html>