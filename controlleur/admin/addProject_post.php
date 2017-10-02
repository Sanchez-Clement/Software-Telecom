<?php
session_start();


$category = $_POST['category'];


 $deadline= preg_replace('`,`', '', $_POST['deadline']);
$date = date_create_from_format('j M Y', $deadline);
$deadline = date_format($date, 'Y-m-d');
var_dump($deadline);
$title  = htmlspecialchars($_POST['title']);
$resume  = htmlspecialchars($_POST['resume']);
echo $_SESSION['id'];

require_once "../../modele/connexion_sql.php";
require "../../modele/admin/addproject.php";

addProject($_SESSION['id'],$category,$title,$resume,$deadline);
header('Location: ../../index.php')

?>
