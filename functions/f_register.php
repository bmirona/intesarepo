<?php

	function create_memeber($firstname,$lastname,$gender,$password,$email,$pseudo){
		global $bdd;
		$request = $bdd->prepare('INSERT INTO utilisateur(firstName, lastName, gender, password, email, pseudo, isAdmin) VALUES(?,?,?,?,?,?,?)');
		$request->execute(array ($firstname,$lastname,$gender,$password,$email,$pseudo,Member));
		return 0;
	}
	function create_admin($firstname,$lastname,$gender,$password,$email,$pseudo){
		global $bdd;
		$request = $bdd->prepare('INSERT INTO utilisateur(firstName, lastName, gender, password, email, pseudo, isAdmin) VALUES(?,?,?,?,?,?,?)');
		$request->execute(array ($firstname,$lastname,$gender,$password,$email,$pseudo,Admin));
		return 0;
	}
?>
