<?php

var_dump($_POST['deadline']) ;
 $deadline= preg_replace('`,`', '', $_POST['deadline']);



$date = date_create_from_format('j M Y', $deadline);
$deadline = date_format($date, 'Y-m-d');
var_dump($deadline)
?>
