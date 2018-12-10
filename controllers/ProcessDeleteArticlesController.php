<?php
include("../model/model.php");


/********************get article to delete ************************/
$id = $_POST['delete'];

if(isset($_POST['submit'])) {
  if(!empty($id)) {
      $eNum = implode(' ,',$id);
      $delete=deleteArticle($id,$eNum);
  }
};

include("../views/successDeleteView.php");
