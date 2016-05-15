<?php
if($_POST){

    // include database connection
    include '../local_connect.php';

    try{

        // insert query
        $query = "INSERT INTO utilisateur SET firstname=:firstname,lastname=:lastname,pseudo=:pseudo,commitee=:commitee,email=:email,password=:password";

        // prepare query for execution
        $stmt = $bdd->prepare($query);

        // posted values
        $firstname=htmlspecialchars(strip_tags($_POST['firstname']));
        $lastname=htmlspecialchars(strip_tags($_POST['lastname']));
        $pseudo=htmlspecialchars(strip_tags($_POST['pseudo']));
        $password=htmlspecialchars(strip_tags($_POST['password']));
        $commitee=htmlspecialchars(strip_tags($_POST['commitee']));
        $email=htmlspecialchars(strip_tags($_POST['email']));


        // bind the parameters
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':commitee', $commitee);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Execute the query
        if($stmt->execute()){
            include('../templates/login.php');
        }else{
            die('Unable to save record.');
        }

    }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
