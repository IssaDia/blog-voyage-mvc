<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

    //1. lien avec le model
    include("../model/model.php");
    //2. vérifier les url NTU etc...

    //3. récupérer si besoin des données dans le model
    $articles = get_all_articles();
    //4. appeler le bon template (la bonne vue).
    include("../views/modifyArticleView.php");


?>
