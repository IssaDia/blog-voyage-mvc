<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
 ?>



<?php

function connectDB() {
    try {
    	$bdd = new PDO('mysql:host=localhost;dbname=Voyage;charset=utf8', 'root', '');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch(Exception $e) {
    	// En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
                              }
    return $bdd;
                        }

function get_all_articles(){
    //connexion BDD
    $bdd = connectDB();
  //preparation requete sql en texte
    $sql = "SELECT * FROM Articles;";

  //transformer en vraie requete préparée
    $req = $bdd->prepare($sql);
  //execution
    $req->execute();
  //fetchall
    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
  //fermer la connexion
    $req->closeCursor();
  //renvoyer les données
    return $resultats;
}

function getArticleById($id) {
    $bdd = connectDB();
    $sql = "SELECT * FROM Articles WHERE id=:id";
    $req = $bdd->prepare($sql);
    $req->bindValue(':id', $id,  PDO::PARAM_INT);
    $req->execute();
    $resultat = $req->fetch();
    $req->closeCursor();
    return $resultat;
                              }


function addArticle($titre,$texte,$images){
    $bdd = connectDB();
    $sql = "INSERT INTO Articles (nom, texte, images) VALUES (:titre, :texte,:images);";
    $req = $bdd->prepare($sql);
    $req->bindValue(':titre', $titre, PDO::PARAM_STR);
    $req->bindValue(':texte', $texte, PDO::PARAM_STR);
    $req->bindValue(':images', $images, PDO::PARAM_STR);
    $req->execute();

}

function deleteArticle($id,$eNum){

  $bdd = connectDB();
  $sql = "DELETE FROM Articles WHERE id IN ($eNum)";
  $req = $bdd->prepare($sql);
  $req->bindValue(':id', $id,  PDO::PARAM_INT);
  $req->execute();
  $req->closeCursor();
}

function updateArticle($titre,$texte,$id){

  $bdd = connectDB();
  $sql = "UPDATE Articles SET nom='$titre',texte='$texte'  WHERE id='$id';";
  $req = $bdd->prepare($sql);
  $req->bindValue(':titre', $titre,  PDO::PARAM_STR);
  $req->bindValue(':texte', $texte,  PDO::PARAM_STR);
  $req->bindValue(':id', $id,  PDO::PARAM_INT);
  $req->execute();
  $req->closeCursor();


}

function getContinentsAsArray() {
  $bdd = connectDB();
  $sql = 'SELECT * FROM Continent';
  $req = $bdd->prepare($sql);
  $req->execute();
  $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
  $req->closeCursor();
  return $resultats;

}
 ?>
