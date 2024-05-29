<?php
    $title = 'while Loop';

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
    <title>Document</title>
</head>
<body>
<table class = "table">
    <?php
    $i = 0;
    while($i < count($favoriteGuitars)) {

        $guitar = $favoriteGuitars[$i];
        echo "<tr><td>$guitar</td></tr>";
        $i++;
    }

    ?>

    </table>
</body>
</html>