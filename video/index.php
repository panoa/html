<?php
  // initialize
  $debug = false;
  ini_set( 'display_errors', 0);
  
  // 
  include(dirname(__FILE__) . "/controller/IndexController.php");

  $cnt = new IndexController();
  $cnt->show("template.php");
?>
