<?php

include 'config.php';

$id = $_GET['form_id'];

$mysqli->query("DELETE FROM `forms` WHERE `form_id` = '$id'");
$mysqli->query("DELETE FROM `formsdetail` WHERE `form_id` = '$id'");
mysqli_close($mysqli);
header("location:index.php");

?>