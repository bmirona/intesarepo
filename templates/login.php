<?php ?>
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
</head>
<body>
  <main>
  <nav class="blue-grey darken-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo white-text"> INTernational Engineering Students Association</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="white-text">Log in</a></li>
        <li><a href="#" class="white-text">Register</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="login.html" class="white-text">Log in</a></li>
        <li><a href="login.html" class="white-text">Register</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div id="div-form" class="container">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">person_pine</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">E-mail</label>
        </div>
        <div class="input-field col s12 ">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Password</label>
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
        <h5 class="black-text">ONG's Parteners </h5>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
  <!--  Made by--> <a class="black-text " href="github.com">Made by Mirona</a>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="framework/js/materialize.js"></script>
<script src="framework/js/init.js"></script>

</body>
</html>
