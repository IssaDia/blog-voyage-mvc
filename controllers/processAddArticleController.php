<?php
//1. se mettre en lien avec le model
include("../model/model.php");
//2. verifier les entrées de formulaire
if (isset($_FILES['images']) && $_FILES['images']['error'] == 0)
{
  // Testons si le fichier n'est pas trop gros
  if ($_FILES['images']['size'] <= 1000000)
  {
    // Testons si l'extension est autorisée

    $infosfichier = pathinfo($_FILES['images']['name']);

    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees))
    {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['images']['tmp_name'], 'assets/images/' . basename($_FILES['images']['name']));
    }
  }
  $titre = filter_var($_POST['titre'],FILTER_SANITIZE_STRING,FILTER_NULL_ON_FAILURE);
  $texte = filter_var($_POST['texte'],FILTER_SANITIZE_STRING,FILTER_NULL_ON_FAILURE);
  $images = filter_var(basename($_FILES['images']['name']),FILTER_SANITIZE_STRING,FILTER_NULL_ON_FAILURE);
}

//3. appeler le model si besoin pour lui faire faire un truc ou ramener un truc
addArticle($titre,$texte,$images);

//4. afficher la bonne vue.

include("../views/successAddArticleView.php")
?>
