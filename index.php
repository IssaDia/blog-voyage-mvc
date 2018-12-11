<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include("model/model.php");

//Front Controller

//chargement de autoload.php

//gestion securite
//autre
//routage
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/blogVoyage_MVC/index.php' === $uri) {
include("controllers/listeController.php");
}
elseif ('/blogVoyage_MVC/index.php/article' === $uri) {
include("controllers/detailController.php");
}
elseif ('/blogVoyage_MVC/index.php/Delete' === $uri) {
include("controllers/DeleteArticleController.php");
}
elseif ('/blogVoyage_MVC/index.php/Add' === $uri) {
include("controllers/AddArticleController.php");
}
elseif ('/blogVoyage_MVC/index.php/Modify' === $uri) {
include("controllers/ModifyArticleController.php");
}
else {
header('HTTP/1.1 404 Not Found');
echo '<html><body><h1>Page Not Found</h1></body></html>';
}

 ?>
