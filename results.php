<?php

require_once('paintingsModel.php');
require_once('paintingsController.php');

$paintings = paintingsController::searchbar(@$_POST['search']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="search.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
<div class="page-container">

<header class = "search-header">

    <a href="./index.php"><img src="./images/arrow.svg" width="50px"></a>

    <div class = "test">
        <form autocomplete="off" action="results.php" method="post">
            <input type="text" name="search" placeholder="Search">
            <button id="searchbutton" type="submit" name="submit-search">Search</button>
        </form> 
        <div class="resultats-container">
            <ul class="resultats-list-one" id="list">

            </ul>
            <hr>
            <ul class="resultats-list-two" id="list2">
                
            </ul>
        </div>   
    </div>   
</header>

<main>
    <article class="paintings">        
            <?php
        foreach($paintings as $miniature){
            ?>
        <section class="tableau-container">

                <img src="./images/paintings/<?= $miniature['painting'] ?>" width="100px">
                <h3><a href="element.php/<?= $miniature['id'] ?>"><?= $miniature['name'] ?></a></h3>   

        </section>              
        <?php
            }
            ?>              
    </article>        
</main>


<footer>
    <a href="https://github.com/laura-savickaite/autocompletion"><img src="./images/github.png.crdownload" width="35px"></a>
</footer>

</div>
</body>
</html>