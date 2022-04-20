<?php

require_once('paintingsModel.php');

$content = trim(file_get_contents("php://input"));

    $motclef = $content;
    $mot = trim($motclef);

    // var_dump($mot);
    $model = new PaintingsModel;
    $searchedPaintings = $model->search($mot); 


echo json_encode($searchedPaintings);



