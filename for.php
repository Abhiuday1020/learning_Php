<?php
    $title = 'for Loop';

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
   
    for($i = 0; $i < count($favoriteGuitars); $i++){
        echo "<tr><td>$favoriteGuitars[$i]</td></tr>";
    }

    ?>

    </table>
</body>
</html>