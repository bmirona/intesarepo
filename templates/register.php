<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Register</title>

  <!-- CSS  -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./framework/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./framework/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-5">
  <nav class="blue-grey darken-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"> INTernational Engineering Students Association</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Log in</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Log in</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center grey-text"> Join the international part!</h5>
  </div>
  <div class="col s12 m4 l2">&nbsp;</div>
</div>
</div>

<div class="row">
  <div class="col s12">

    <div class="col s12 m2 l4">
      &nbsp;
    </div>

    <div class="col s12 m8 l4">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s12">
          <input id="country_origin" type="text" class="validate">
          <label for="country_origin">Country of origin</label>
        </div>
        <div class="input-field col s12">
          <input id="city_origin" type="text" class="validate">
          <label for="city_origin">Name of your commitee</label>
        </div>
      </div>
      <div class="row">
        <label>Gender</label>
    <select class="browser-default">
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Male</option>
      <option value="2">Female</option>
    </select>

      </div>
      <div class="row ">  <!-- makes sure that they will right smth@smth.st -->
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password confirmation</label>
        </div>
      </div>

  <button class="btn waves-effect waves-light black lighten-2" type="submit" name="action" id="but">Register
    <i class="material-icons right">send</i>
  </button>
  </div>
    </form>
  </div>
  </div>
</div>

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
    <!--  Made by--> <a class="black-text " href="http://materializecss.com">Made by Mirona</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="framework/js/materialize.js"></script>
  <script src="framework/js/init.js"></script>

  </body>
</html>
