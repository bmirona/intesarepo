<?php
require_once('../local_connect.php');

$get_id=$_GET['idCountry'];

// sql to delete a record
$sql = "Delete from country where idCountry = '$get_id'";

// use exec() because no results are returned
$bdd->exec($sql);
header('location:../templates/crudCountry.php');
?>
