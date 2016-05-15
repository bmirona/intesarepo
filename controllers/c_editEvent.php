<?php
include '../local_connect.php';

$get_id=$_REQUEST['idEvent'];

$nameEvent= $_POST['nameEvent'];
$descriptionEvent= $_POST['descriptionC'];

$sql = "UPDATE utilisateur SET nameEvent ='$nameEvent', descriptionC ='$descriptionC' WHERE idCountry = '$get_id' ";

$bdd->exec($sql);
echo "<script>alert('Successfully Edit!'); window.location='../templates/crudEvent.php'</script>";


?>
