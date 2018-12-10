<div class="col-md-4">
            <h2>Modifier un article :</h2>
           <form action="../controllers/processModifyArticlecontroller.php" method="post">
            <select name="article" id="article">
              <option selected disabled>Choisissez un article</option>
              <?php foreach ($articles as $article){ ?>
              <option value="<?php  echo $article['id']; ?>" ><?php echo $article['nom']; ?>
                <?php } ?>
              </option>
            </select>
            <input type="submit"value="Valider" name="update"/>
          </form>
        </div>
