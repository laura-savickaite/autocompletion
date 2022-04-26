<?php

//retourne UN tableau/la fiche du tableau

require_once('paintingsController.php');

$url = $_SERVER['REQUEST_URI']; 
$explode = explode("/", $url);  

// var_dump($explode[3]);

if($explode[3] == ""){
    header('Location:index.php');
}

$return = paintingsController::onePainting($explode[3]);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style.css">
    <script src="../search.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painting</title>
</head>
<body>
    <div class="page-container">

        <header class = "element-header">

            <a href="../paintings.php"><img src="../images/arrow.svg" width="50px"></a>

            <p><a href = "../index.php">Index</a></p>
        </header>

        <main>
            <article class = "painting-container">
                <?php
                foreach($return as $painting)
                {
                ?>

                    <img src="../images/paintings/<?= $painting['painting'] ?>" width="500px">
                    <section class = "painting-description">
                        <h2><?= $painting['name'] ?></h2>
                        <p><?= $painting['description']?></p>
                        <p><?= $painting['date']?></p>                        
                    </section>


                <?php
                }
                ?>        
            </article>        
        </main>
        
        <footer>
            <a href="https://github.com/laura-savickaite/autocompletion"><img src="../images/github.png.crdownload" width="35px"></a>
        </footer>

    </div>
</body>
</html>


