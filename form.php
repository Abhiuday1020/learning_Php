<?php
 $consumer_number = $_POST["consumer_number"] ;
 $consumer_name = $_POST["consumer_name"] ;
 $previous_reading = $_POST["consumer_pre_reading"] ;
 $present_reading = $_POST["consumer_pres_reading"] ;
 $unit = $present_reading - $previous_reading;
 $total = 0;
 if($unit < 100)
 {
    $total = 3*$unit;
 }
 else if($unit >= 100 && $unit < 200)
 {
    $total = 4*$unit;
 }
 else if($unit >= 200 && $unit < 300){
    $total = 4*$unit;
 }
 else{
   $total = 5*$unit;
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     #div1-h1 {
            background-color: orange;
            color: white;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
     #white{
        background-color: white;
        height: 50px;
        display: flex;

     }   
     #yellow{
        background-color: yellow;
        height: 50px;
        display: flex;
     }
  </style>  
</head>
<body>
   <div>
      <div id="div1-h1">
         <h1>Electricity Bill</h1>
      </div>
      <div id="white">
        <?php 
        echo "<h2>Consumer_Number <span style='margin-left: 110px;'>$consumer_number</span></h2>";
        ?>
      </div>
      <div id="yellow">
        <?php 
        echo "<h2>Consumer_Name <span style='margin-left: 133px;'>$consumer_name</span></h2></h2>";
        ?>
      </div>
      <div id="white">
        <?php 
        echo "<h2>Previous Reading <span style='margin-left: 130px;'>$previous_reading</span></h2></h2>";
        ?>
      </div>
      <div id="yellow">
        <?php 
        echo "<h2>Present Reading <span style='margin-left: 140px;'>$present_reading</span></h2></h2>";
        ?>
      </div>
      <div id="white">
        <?php 
        echo "<h2>Unit Consumed<span style='margin-left: 155px;'>$unit</span></h2></h2>";
        ?>
      </div>
      <div id="yellow">
        <?php
        echo "<h2>Amount <span style='margin-left: 225px;'>$total</span></h2></h2>";
        ?>
      </div>
   </div>
</body>
</html>