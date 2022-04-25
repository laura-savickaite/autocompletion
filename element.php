<?php

//retourne UN tableau/la fiche du tableau

require_once('paintingsController.php');

$url = $_SERVER['REQUEST_URI']; 
$explode = explode("/", $url);  
// var_dump($explode[3]);

$return = paintingsController::onePainting($explode[3]);

foreach($return as $painting){
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
    <img src="../images/paintings/<?= $painting['painting'] ?>">
    <h2><?= $painting['name'] ?></h2>
    <p><?= $painting['description']?></p>
    <p><?= $painting['date']?></p>
</body>
</html>

    <?php
}

?>

