<!-- Cette page doit ressembler à la page d’accueil d’un moteur de recherche. -->

<?php
require_once('paintingsController.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="search.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocompletion</title>
</head>
<body>
    <article>
        <form action="" method="post">
            <input type="text" name="search" placeholder="Search">
            <button id="searchbutton" type="submit" name="submit-search">Search</button>
        </form> 
        
        <div class="resultats-container">
            <ul class="resultats-list-one" id="list">

            </ul>
            <hr>
            <ul class="resultats-list-two" id="list">
                
            </ul>
        </div>        
    </article>

</body>
</html>

