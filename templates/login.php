<?php include("../controllers/cookie.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Log in</title>

  <!-- CSS  -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../framework/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../framework/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title>Log in</title>
</head>

<body>
    <nav class="blue-grey darken-3">
        <div class="nav-wrapper container" role="navigation">
          <a id="logo-container" href="index.php" class="brand-logo white-text"> INTESA</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../index.php" class="white-text">Home</a></li>
            <li><a href="login.php" class="white-text">Log in</a></li>
            <li><a href="register.php" class="white-text">Register</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav blue-grey">
            <li><a href="../index.php" class="white-text">Home</a></li>
            <li><a href="login.html" class="white-text">Log in</a></li>
            <li><a href="login.html" class="white-text">Register</a></li>
          </ul>
        </div>
      </nav>
<main>

 <div id="div-form" class="row">
    <form class="col s12" action="../controllers/c_login.php" method="post">
      <div class="row">
        <div class=" input-field col s9">
          <i class="material-icons prefix">person_pine</i>
          <input value="pseudo" id="pseudo" type="text" required name="pseudo" class="validate">
          <label for="pseudo" class="active" name="pseudo">pseudo</label>
        </div>
        <div class="input-field col s9">
          <i class="material-icons prefix">vpn_key</i>
          <input value="password" id="password" type="password" required name="password" class="validate">
          <label for="password" class="active" name="password">password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light black lighten-2" type="submit" name="action" id="but">Log in
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
</main>

<footer class="page-footer blue-grey darken-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">ONG's Parteners </h5>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
  <!--  Made by--> <a class="white-text " href="github.com">Made by Mirona</a>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="framework/js/materialize.js"></script>
<script src="framework/js/init.js"></script>
</body>
</html>
