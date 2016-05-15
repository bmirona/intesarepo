<?php

	function create_member($firstname,$lastname,$password,$email,$pseudo,$commitee, $isAdmin){
		global $bdd;
		$request = $bdd->prepare('INSERT INTO utilisateur(firstName, lastName, password, email, pseudo,commitee, isAdmin) VALUES(?,?,?,?,?,?,?)');
		$request->execute(array ($firstname,$lastname,$password,$email,$pseudo,$commitee,'member'));
		return 0;
	}

?>
