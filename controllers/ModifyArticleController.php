<?php
    //3. récupérer si besoin des données dans le model
    $articles = get_all_articles();
    //4. appeler le bon template (la bonne vue).
    include("views/modifyArticleView.php");
?>
