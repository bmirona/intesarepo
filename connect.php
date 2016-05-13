<?php
try {

  $dbh = new PDO('pgsql:dbname=d33bqbai8cac73;host=ec2-54-228-219-2.eu-west-1.compute.amazonaws.com?sslmode=require;user=everrsslsbdsjo;password=wEttOMA42PlEuhmQmdwSOtWZuI');
  //echo "PDO connection object created";
  $dbh->prepare("SELECT * FROM event");
  $dbh->execute();
  $test=$dbh->fetch(PDO::FETCH_ASSOC);
  print_r($test);
  echo "reussi";
}
catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  echo " error";
}
?>
