
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
  <title>Register</title>
</head>

<body background="../images/backgr.jpg">
  <main>
    <nav class="blue-grey lighten-4" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo black-text"> INTESA</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../index.php" class="black-text">Home</a></li>
            <li><a href="login.php" class="black-text">Log in</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="../index.php" class="black-text">Home</a></li>
            <li><a href="login.php" class="black-text">Log in</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>

<main>
  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center black-text"> Join the international part!</h5>
  </div>
  <div class="col s12 m4 l2"></div>
</div>
</div>

<div class="row">
  <div class="col s12">
    <div class="col s12 m2 l4">

    </div>
    <div class="row">
      <div class="col s12 m4 l2">&nbsp;</div>
      <div class="col s12 m4 l8">
      <div class="col s12 m4 l2">&nbsp;</div>
    </div>
    </div>

    <div class="row">
      <div class="col s12">

        <div class="col s12 m2 l4">
          &nbsp;
        </div>
<!--<input value="pseudo" id="pseudo" type="text" name="pseudo" class="validate">
<label for="pseudo" class="active" name="pseudo">pseudo</label>-->
       <div class="col s12 m8 l4">
        <form class="col s12" method="post" action="../controllers/c_newregister.php">
          <div class="row">
            <div class="input-field col s6">
              <input value="FirstName" id="firstname" type="text" required name="firstname" class="validate" pattern='.{0,20}'>
              <label for="firstname" class="active" name="firstname">First Name</label>
            </div>
            <div class="input-field col s6">
              <input value="LastName" id="lastname" type="text" required name="lastname" class="validate"  pattern='.{0,20}'>
              <label for="lastname" class="active" name="lastname">Last Name</label>
            </div>
            <div class="input-field col s12">
              <input value="Pseudo" id="pseudo" type="text" required name="pseudo" class="validate">
              <label for="pseudo" class="active" name="pseudo">Choose a pseudo</label>
            </div>
            <div class="input-field col s12">
              <input value="Country" id="country_origin" type="text" required name="origin_country" class="validate" pattern='.{0,20}'>
              <label for="country_origin" class="active" name="origin_country">Country of origin</label>
            </div>
            <div class="input-field col s12">
              <input value="Commitee" id="commitee" type="text" required name="commitee" class="validate" pattern='.{0,20}'>
              <label for="commitee" class="active" name="commitee">Commitee</label>
            </div>
            <div class="row">
              <label>Gender</label>
                <select class="browser-default">
                   <option value="" disabled selected>Choose your option</option>
                   <option value="1">Male</option>
                   <option value="2">Female</option>
                </select>
           </div>
        </div>
          <div class="row">
            <div class="input-field col s12">
              <input value="E-mail" id="email" type="email" required name="email" class="validate" pattern='.{0,20}'>
              <label for="email" class="active" name="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input  id="password" type="password" required name="password" class="validate" pattern='.{5,20}'>
              <label for="password" class="active" name="password">Password</label>
            </div>
          <div class="row">
            <div class="input-field col s12">
              <input  id="password_conf" type="password" required name="password_conf" class="validate" pattern='.{5,20}'>
              <label for="password_conf" class="active" name="password_conf">Password Confirmation</label>
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

</main>
<footer class="page-footer blue-grey lighten-4">
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



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="framework/js/materialize.js"></script>
  <script src="framework/js/init.js"></script>
</footer>

  </body>
</html>
