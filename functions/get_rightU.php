<?php  function get_rights_user(){
		global $bdd;
		$pseudo = $_COOKIE['user'];
		$req = $bdd->prepare('SELECT isAdmin FROM utilisateur WHERE pseudo = ?');
		$req->execute(array ($pseudo));
		$droit = $req -> fetch();
		return $droit;
	}
  ?>
