  <!DOCTYPE html>
  <?php include("header.php"); ?>
  <?php include("nav.php"); ?>
  <?php include("carousel.php"); ?>
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
    <?php include("footer.php"); ?>
  </html>
