<?php
   $title = "function";
   $aa = "good";
   include('./incl/header.php');
   $guitars = [
    ['name' => 'Vela', 'manufacturer' => 'Prs'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'fender'],
   ];
   $greeting = "<br>Hello world";

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

<body>
    <h1>hellooo</h1>
    <?php
    $ans = sum(5,2);
    print_r($ans);
    print_r($ans);
    echo "<br>".$aa;
    ?>

<?php
   include('./incl/footer.php');
   ?>
