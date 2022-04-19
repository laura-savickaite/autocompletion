<?php

class PaintingsController 
{ 
    public static function allPaintings()
    {
        $model = new PaintingsModel();
        $findAll = $model->selectAll();
        
    }

    public static function onePaintings($id)
    {
        $model = new PaintingsModel();
        $findOne = $model->selectOne($id);
        
    }

    public static function searchbar($motclef)
    {
        // $motclef = Controller::preventXSS($_POST['search']);
        // $motclef = $_POST['search'];
        $mot = trim($motclef);

        $model = new PaintingsModel;
        $searchedPaintings = $model->search($mot); 
        echo 'ok';
    }

}