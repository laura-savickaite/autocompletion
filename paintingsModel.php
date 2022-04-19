<?php

require_once('database.php');

class paintingsModel {

   public function selectAll()
    {
        $this->database = DataBase::getPdo();

        $selectAll=$this->database->prepare('SELECT * FROM `autocompletion`');        
        $selectAll -> execute();
        $result = $selectAll -> fetchAll();

        return($result);
    } 

    public function selectOne($id)
    {
        $this->database = DataBase::getPdo();

        $selectOne=$this->database->prepare('SELECT * FROM `autocompletion` WHERE id=:id');        
        $selectOne -> execute(['id' => $id]);
        $result = $selectOne -> fetchAll();

        return($result);
    } 

    public function search($mot)
    {
        $transformWord = '%'.$mot.'%';

        $this->database = DataBase::getPdo();

        $search=$this->database->prepare('SELECT * FROM `autocompletion` WHERE name LIKE :transformWord');
        $search -> execute(['transformWord' => $transformWord]);
        $resultSearch = $search -> fetchAll();
  
        return($resultSearch);
    }
}


