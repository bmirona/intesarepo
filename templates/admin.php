<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Admin Page</title>

  <!-- CSS  -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../framework/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../framework/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <nav class="#cfd8dc blue-grey lighten-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"> INTESA</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../controllers/signout.php">Log Out</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../controllers/signout.php">Log Out</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <main>
 <!-- this part is for the admin -->
  <div id="div-admin" class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-grey-text"><a href="crudCountry.php"><i class="material-icons">settings</i></h2></a>
              <h5 class="center">Countries</h5>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-grey-text"><a href="#"><i class="material-icons">settings</i></h2></a>
              <h5 class="center">Members</h5>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-grey-text"><a href="crudEvent.php"><i class="material-icons">settings</i></h2></a>
              <h5 class="center">Events</h5>
            </div>
          </div>
        </div>

      </div>
      <br><br>

      <div class="section">

      </div>
    </div>

</main>

<footer class="page-footer teal #cfd8dc blue-grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">Parteners</h5>



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
  <script src="../framework/js/materialize.js"></script>
  <script src="../framework/js/init.js"></script>



</body>
</html>
