<div class="row">
  <div class="col-md-12 center-block">
    <h1 <?=$resultats['nom']?></h1>

    <form  action="../controllers/processValidateModifyArticlecontroller.php" method="post">
      <input name="id" type="hidden" value="<?=$resultats['id']?>">
      <h2>Changez le titre de l'article : </h2>
        <input type="text" name="titre" value="<?=$resultats['nom']?>" size="50">
      <h2>Changez le contenu de l'article : </h2>
        <textarea class="form-control" rows="20" cols="50" name="texte" ><?=$resultats['texte']?></textarea>
      <input type="submit" value="Valider" name="submit" />

  </form>
</div>
</div>
