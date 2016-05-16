<?php
	if(!isset($_COOKIE["user"]))
    {
        	header('Location: ../index.php');
    }
    elseif(isset($_COOKIE["user"])){
    	setcookie('user','',-1,"/");
			 echo '<script>alert(\'This site is using  cookies :)\');</script>';
    	header('Location: ../index.php');
    }
?>
