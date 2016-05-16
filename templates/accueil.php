<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Accueil</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../framework/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../framework/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title>Accueil</title>
</head>

<body class="#b0bec5 blue-grey lighten-3">
  <nav class="#cfd8dc blue-grey lighten-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="../index.php" class="brand-logo">INTESA</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../controllers/signout.php">Log Out</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="../controllers/signout.php">Log Out</a></li>
      </ul>
      <a href="../index.php" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<!--main menu-->
  <nav class="#b0bec5 blue-grey lighten-3" role="navigation">
    <div class="nav-wrapper container">
      <ul class="left hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="commitees.php">Commitees</a></li>
        <li><a href="events.php">Events</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
        <li><a href="commitees.php">Commitees</a></li>
        <li><a href="events.php">Event</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<!-- content section-->
  <div id="index-banner" class="parallax-container ">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center black-text text-lighten-2"> INTernational Engineering Students Association</h1>
        <div class="row center">
          <h5 class="header col s12 light black-text">Power your future!</h5>
        </div>
        <div class="row center">
          <a href="events.php" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Check the event list</a>
        </div>
        <br><br>
        </div>
    </div>
    <div class="parallax"><img src="../images/background3.png" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container #cfd8dc blue-grey lighten-4">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">language</i></h2>
            <h5 class="center">About us</h5>
            <p class="light">International Engineering Students Association is an apolitical, non-governmental and non-profit organization which targets and trains through its activities students from engineering profile Universities, Institutes and Technical Schools in Europe.
With the activities INTESA provides, it creates opportunities for students to reach their potential in academic, professional and social life.</p>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">perm_identity</i></h2>
            <h5 class="center">Contact us</h5>
            <p class=" center light">board@intesa.net</p>
            <p class=" center light"> Independence Street, 262  Bucharest, Romania</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
      </div>
    </div>
    <div class="parallax"><img src="../images/background1.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container #cfd8dc blue-grey lighten-4">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h5>Spot a bug?</h5>
          <a href="form.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Contact us</a>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
      </div>
    </div>
    <div class="parallax"><img src="../images/background2.jpg" alt="Unsplashed background img 3"></div>
  </div>

<!-- the footer -->
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
   <a class="black-text " href="#">© 2016 Mirona BIRZANEANU</a>
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../framework/js/materialize.js"></script>
    <script src="../framework/js/init.js"></script>

  </body>
</html>
