<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
  /*  include("../vendor/autoload.php");
    $loader = new Twig_Loader_Filesystem('../views');
    $twig = new Twig_Environment($loader, array(
        'cache' => '../template_cache',
    )); */

 ?>

<?php

  //1.se mettre en lien avec le modéle.

  //2. Analyse la requete de l'utilisateur
    //si besoin analyser les param(NTU)

  //3. Demander au model les données nécessaires
    //(si il en faut) et les stocker dans des variables
    $articles = get_all_articles();
    $continents = getContinentsAsArray();
  //4. Appeler la bonne vue, le bon template

  /*  echo $twig->render('listeArticlesView.php', array(
      'articles' => $articles,
      'continents' => $continents
    )); */

      include("views/listeArticlesView.php");

 ?>
