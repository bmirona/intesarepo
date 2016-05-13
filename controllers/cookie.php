<?php require("../local_connect.php");?>
<?php require('../functions/get_rightU.php');?>
<?php
	if(isset($_COOKIE["user"])){
		$droit=get_rights_user();
		if($droit['isAdmin']==Member){
			header('Location:../templates/accueil.php');
		}
		elseif ($droit['isAdmin']==Admin) {
			header('Location: ../templates/register.php');
		}
	}
?>
