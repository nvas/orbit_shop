<?php
include "php/view.php";
$view = new View();
$view->head();
$view->navbar();
$view->login();
$view->upper();
$view->lower();
$view->card();
$view->foot();



?>