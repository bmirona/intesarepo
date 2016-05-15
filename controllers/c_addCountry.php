<?php
require_once('../local_connect.php');

$nameC= $_POST['nameC'];
$descriptionC= $_POST['descriptionC'];


$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO country (nameC,descriptionC)
VALUES ('$nameC', '$descriptionC')";

$bdd->exec($sql);
echo "<script>alert('Country successfully added!'); window.location='../templates/crudCountry.php'</script>";
?>
