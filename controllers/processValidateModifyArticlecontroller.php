<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

    //1. lien avec le model
    include("../model/model.php");
    //2. vérifier les url NTU etc...
    $titre = filter_var($_POST['titre'],FILTER_SANITIZE_STRING,FILTER_NULL_ON_FAILURE);
    $texte = filter_var($_POST['texte'],FILTER_SANITIZE_STRING,FILTER_NULL_ON_FAILURE);
    $id = filter_var($_POST['id'],FILTER_SANITIZE_STRING,FILTER_NULL_ON_FAILURE);

    //3. récupérer si besoin des données dans le model

    if(isset($_POST['submit'])) {
  if(isset($titre) && isset($texte)) {

    updateArticle($titre,$texte,$id);
  }
    };
include("../views/successModifyView.php");
?>
