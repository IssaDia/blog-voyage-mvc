  <!DOCTYPE html>
  <?php include("../Templates/header.php"); ?>
  <?php include("../Templates/nav.php"); ?>
  <?php include("../Templates/carousel.php"); ?>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <div class="row">
        <div class="col-md-12 text-center">
          <h1><?=$article['nom']?></h1>
          <img src="../assets/images/<?=$article['images']?>" class="img-fluid" alt="Responsive image" />
          <p><?=$article['texte']?></p>
          <p><?=$article['date_dujour']?></p>
        </div>
      </div>
    </body>
    <?php include("../Templates/footer.php"); ?>
  </html>
