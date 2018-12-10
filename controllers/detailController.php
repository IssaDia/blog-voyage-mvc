<?php
//1.prendre connaissance du model
include("../model/model.php");
//2.analyse de l'URL filtrage NTU
if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id= filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $article= getArticleById($id);
}
else{
  header("Location: listeController.php");
}

//4.appeler la bonne vue

include("../views/detailArticleView.php");


?>
