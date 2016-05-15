<?php
	if(!isset($_COOKIE["user"]))
    {
        	header('Location: ../index.php');
    }
    elseif(isset($_COOKIE["user"])){
    	setcookie('user','',-1,"/");
    	header('Location: ../index.php');
    }
?>
