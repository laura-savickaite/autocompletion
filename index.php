<!-- Cette page doit ressembler à la page d’accueil d’un moteur de recherche. -->

<?php
require_once('paintingsController.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="search.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocompletion</title>
</head>
<body>
    <article>
        <form autocomplete="off" action="" method="post">
            <!-- <div class="autocomplete" style="width:300px;"> -->
                <input type="text" name="search" placeholder="Search">
            <!-- </div> -->
            <button id="searchbutton" type="submit" name="submit-search">Search</button>
        </form> 
        
        <div class="resultats-container">
            <ul class="resultats-list-one" id="list">

            </ul>
            <hr>
            <ul class="resultats-list-two" id="list2">
                
            </ul>
        </div>        
    </article>

    <article class = "résultats">
        <?php
        if(isset($_POST['submit-search'])){

            $résultats = paintingsController::searchbar(@$_POST['search']);
        
            if(empty($résultats)){
                ?>

            <p>
                Il n'y a pas de résultats pour votre recherche. 
                Pour visiter nos tableaux, cliquez <a href="./paintings.php">ici</a>.
            </p>            

                <?php
            }
            else 
            {
                foreach($résultats as $résultat)
                {
                    ?>

                    <img src="./images/paintings/<?= $résultat['painting'] ?>" width="100px">
                    <h3><a href="element.php/<?= $résultat['id'] ?>"><?= $résultat['name'] ?></a></h3>

                    <?php
                }
            }
        }
        ?>

    </article>

</body>
</html>

