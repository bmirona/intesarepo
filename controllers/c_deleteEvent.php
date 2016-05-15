<?php
require_once('../local_connect.php');

$get_id=$_GET['idEvent'];

// sql to delete a record
$sql = "Delete from event where idEvent = '$get_id'";

// use exec() because no results are returned
$bdd->exec($sql);
header('location:../templates/crudEvent.php');
?>
