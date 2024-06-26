<?php
    $title = 'foreach Loop';

    $favoriteGuitars = [
        'Vela',
        'Explorer',
        'Strat'
    ];

    $kvpGuitars = [
        'prs' => 'Vela',
        'gibson' => 'Explorer',
        'fender' => 'strat'
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php fundamentals: <?= $title; ?></title>
</head>
<body>
    <table class = "table">
    <?php
   
    foreach ($favoriteGuitars as $guitar) {
        echo "<tr><td>$guitar</td></tr>";
    }

    ?>

    </table>
    <br>
    <table class = "table1">
    <?php
   
    foreach ($kvpGuitars as $key => $guitar) {
        echo "<tr><td>$key</td><td>$guitar</td><tr>";
    }

    ?>

    </table>
</body>
</html>