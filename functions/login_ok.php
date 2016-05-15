<?php
    require("../local_connect.php");
	function verifPseudo($pseudo){
        global $bdd;
        //vérifier dans la base
        $verif_pseudo = $bdd->prepare("SELECT COUNT(*) FROM utilisateur WHERE pseudo = ? ");
        $verif_pseudo->execute(array($pseudo));
        $table =$verif_pseudo->fetch();
        return $table;
	}
    function verifPassword($password){
        global $bdd;
        //recherche du mot de passe correspondant au pseudo
        $identif = $bdd->prepare('SELECT pseudo,password FROM utilisateur WHERE pseudo = ? and password = ?');
        $identif->execute(array($pseudo,$password));
        $donnees = $identif->fetchColumn();
        return $donnees;
    }
    function verifAdmin($pseudo){
        global $bdd;
        $isadmin = $bdd->prepare('SELECT isAdmin FROM utilisateur WHERE pseudo = ?');
        $isadmin->execute(array($pseudo));
        $acces =  $isadmin->fetch();
        return $acces;
    }
?>
