<?php
	    require('../local_connect.php');
		include_once('../functions/sf_register.php');
		if(isset($_POST['last_name']) AND isset($_POST['first_name']) AND isset($_POST['pseudo']) AND isset($_POST['gender']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['country_origin']) AND isset($_POST['commitee'])){
			$lastname =htmlentities($_POST['last_name'],ENT_QUOTES);
		  $firstname =htmlentities($_POST['first_name'],ENT_QUOTES);
		  $pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES);
			$password = sha1(htmlentities($_POST['password'],ENT_QUOTES));
			$email =htmlentities($_POST['email'],ENT_QUOTES);
      $gender =htmlentities($_POST['gender'],ENT_QUOTES);
			$result = create_member($firstname,$lastname,$gender,$password,$email,$pseudo);
			if ($result==0){
				header('Location: ../templates/login.php');
			}
			else{
				echo "Error, please try again";
				sleep(2);
				header('Location: ../templates/register.php ');
			}
		}
?>
