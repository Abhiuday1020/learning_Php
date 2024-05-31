<?php

 $var1 = 46;
 $var2 = 79         ;

//   function swapfunction(&$var1 ,&$var2){
//     $temp = $var1;
//     $var1 = $var2;
//     $var2 = $temp;
//   }

function swapfunction(&$var1 ,&$var2){
   $var1 = $var1 + $var2;
   $var2 = $var1 - $var2;
   $var1 = $var1 - $var2;
}


  echo "num1 and nums2 before swap<br>";
  echo "num1 : $var1 <br> num2 : $var2<br>";

  swapfunction($var1, $var2);


  echo "num1 and nums2 after swap<br>";
  echo "num1 : $var1 <br> num2 : $var2";