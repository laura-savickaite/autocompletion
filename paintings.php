<?php

//liste de tous les tableaux

require_once('paintingsController.php');

$paintings = paintingsController::allPaintings();


foreach($paintings as $miniature){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painting</title>
</head>
<body>
    <img src="./images/paintings/<?= $miniature['painting'] ?>" width="100px">
    <h3><a href="element.php/<?= $miniature['id'] ?>"><?= $miniature['name'] ?></a></h3>
</body>
</html>

    <?php
}