<?php
include '../local_connect.php';

$get_id=$_REQUEST['idCountry'];

$nameC= $_POST['nameC'];
$descriptionC= $_POST['descriptionC'];

$sql = "UPDATE utilisateur SET nameC ='$nameC', descriptionC ='$descriptionC' WHERE idCountry = '$get_id' ";

$bdd->exec($sql);
echo "<script>alert('Successfully Edit!'); window.location='../templates/crudCountry.php'</script>";


?>
