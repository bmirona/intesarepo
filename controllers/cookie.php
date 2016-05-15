<?php require("../local_connect.php");?>
<?php require('../functions/get_rightU.php');?>
<?php
	if(isset($_COOKIE["user"])){
		$droit=getrightsuser();
		if($droit['isAdmin']== "member"){
			header('Location:../templates/accueil.php');
		}
		else {
			header('Location: ../templates/admin.php');
		}
	}
?>
