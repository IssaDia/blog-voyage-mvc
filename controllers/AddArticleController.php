

<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    include("views/header.php");
    //1. lien avec le model
    //2. vérifier les url NTU etc...

    //3. récupérer si besoin des données dans le model
    //4. appeler le bon template (la bonne vue).
    include("views/addArticleView.php");



?>
