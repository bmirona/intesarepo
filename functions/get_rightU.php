<?php
    function getrightsuser(){
		global $bdd;
		$pseudo = $_COOKIE['user'];
		$req = $bdd->prepare('SELECT isAdmin FROM utilisateur WHERE pseudo = ?');
		$req->execute(array ($pseudo));
		$droit = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $droit;
	}
  ?>
