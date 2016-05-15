<?php
require_once('../local_connect.php');

$nameEvent= $_POST['nameEvent'];
$descriptionEvent= $_POST['descriptionEvent'];


$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO event (nameEvent,descriptionEvent)
VALUES ('$nameEvent', '$descriptionEvent')";

$bdd->exec($sql);
echo "<script>alert('Event successfully added!'); window.location='../templates/crudEvent.php'</script>";
?>
