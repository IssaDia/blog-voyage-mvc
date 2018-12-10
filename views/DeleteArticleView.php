<h2>Supprimer un article :</h2>
            <form action="../controllers/ProcessDeleteArticlesController.php" method="post">
              <table>
                <tbody>
                  <tr>
                    <td>id</td>
                    <td>nom</td>
                  </tr>
                <?php
                    $articles = get_all_articles();
                    foreach ($articles as $article){
                ?>
                  <tr>
                    <td><?php  echo $article['id'] ?></td>
                    <td><input type="checkbox" name="delete[]" id='delete[]' value="<?php  echo $article['id'] ?>"><?php echo $article['nom'] ?><br></td>
                                                <?php } ?>
                  </tr>
                </tbody>
             </table>
             <input type="submit" name="submit" value="Valider"/>
            </form>
