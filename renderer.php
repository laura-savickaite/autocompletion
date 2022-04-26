
   
<?php

class Renderer {

/**
     * Undocumented function
     *
     * @param string $fichier dans quel fichier injecter la view
     * @param array $donnees données à afficher dans la view
     * @param string $template template d'affichage
     * @return void
     */
    public static function render(string $fichier, array $donnees = [], string $template = 'layout')
    {

        echo "je suis dans render";
        // On extrait le contenu de $donnees
        extract($donnees);

        // var_dump($donnees);
        //  La fonction ob_start permet de démarrer le buffer de sortie
        //  A partir de ce point toute sortie est conservée en mémoire
        ob_start();
        // On crée le chemin vers la vue
        require ($fichier.'.php');

        //  ob_get_clean permet de stocker le buffer dans la variable $contenu 
        $content = ob_get_clean();

    }
}