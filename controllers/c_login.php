<?php
// Je me connecte à la base de données

        require("../local_connect.php");
        //Sécurisation des données saisies
        $pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES);
        $password = htmlentities($_POST['password'],ENT_QUOTES);

        //secure the password
        $password=sha1($password);
        //check if is an admin
        $reponse_admin = $bdd->prepare('SELECT isAdmin FROM utilisateur WHERE pseudo = ?');
        $reponse_admin->execute(array($pseudo));
        $droit =  $reponse_admin->fetch();
        if(!isset($_COOKIE["user"]))
        {
            if(isset($_POST['pseudo']) && isset($_POST['password'])){
                $verif_pseudo = $bdd->prepare("SELECT COUNT(*) FROM utilisateur WHERE pseudo = ? ");
                $verif_pseudo->execute(array($pseudo));
                $count =$verif_pseudo->fetch();
                if($count[0] == 0)
                {
                    echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location:../templates/login.php');

                }
                else { //existing login

                    //choose password
                    $conn = $bdd->prepare('SELECT pseudo,password FROM utilisateur WHERE pseudo = ? and password = ?');
                    $conn->execute(array($pseudo,$password));
                    $donnees = $conn->fetchColumn();
                    //check if it's the good password

                    if ($donnees == true)
                    {

                        if ($droit['isAdmin'] == 'member'){
                            echo "c'est un abonne";
                            header('Location: ../templates/accueil.php');
                        }
                        else{
                             echo "c'est un admin";
                             header('Location: ../templates/admin.php');
                            }

                        setcookie("user",$pseudo,time()+365*24*3600, null, null, false, true);
                         echo '<script>alert(\'This site is using cookies :)\');</script>';
                    }
                    else{
                        header('Location: ../templates/login.php');
                    }
                }
           }
       }
            elseif(isset($_COOKIE["user"]))
            {
                if ($droit['isAdmin'] == 'member'){
                  header('Location: ../templates/accueil.php');
                    exit();
                }
                else{
                    header('Location: ../templates/admin.php');
                    exit();
                }
            }
?>
