<?php
	    require('../local_connect.php');
		  include('../functions/f_register.php');
    	include("../functions/login_ok.php");

		 if(isset($_POST['firstName']) AND isset($_POST['lastName']) AND isset($_POST['password']) AND isset($_POST['email']) AND isset($_POST['pseudo']) AND isset($_POST['commitee']) ){
			$firstName =htmlentities($_POST['firstName'],ENT_QUOTES);
		  $lastName =htmlentities($_POST['lastName'],ENT_QUOTES);
			$password = htmlentities($_POST['password'],ENT_QUOTES);
			$email =htmlentities($_POST['email'],ENT_QUOTES);
			$pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES);
			$commitee = htmlentities($_POST['commitee'],ENT_QUOTES);

			 $password=sha1($password);
			$result = create_member($firstName,$lastName,$password,$email,$pseudo,$commitee);
      if ($result!=0){
			echo "L' inscription n'a pas fonctionné";
			//check is the pseudo already exists
			$table=verifPseudo($pseudo);
			if ($table[0]!=0){
				echo 'Le pseudo existe déjà, veuillez le changer ou vérifier si cet adhérent est déjà inscrit';
			}
			header("Location: ../templates/register.php");
		} else{
			echo "L'inscription a bien été effectué";
			header("Location: ../templates/login.php");
		}
	} else{
		echo "Erreur ! vous n'avez pas rempli tous les champs";
	}
?>
