<?php

//controlleur d'un tableau, tous les tableaux ET search php version

require_once('paintingsModel.php');
require_once('renderer.php');

class paintingsController 
{ 
    public static function allPaintings()
    {
        $model = new PaintingsModel();
        $findAll = $model->selectAll();

        return $findAll;
        
    }

    public static function onePainting($id)
    {
        $model = new PaintingsModel();
        $findOne = $model->selectOne($id);

        return $findOne;
    }

    public static function searchbar($motclef)
    {
        // $motclef = Controller::preventXSS($_POST['search']);
        // $motclef = $_POST['search'];
        $mot = trim($motclef);

        $model = new PaintingsModel;
        $searchedPaintings = $model->search($mot);

        return $searchedPaintings;
        
        // renderer::render('results', compact('searchedPaintings'));
    }
}