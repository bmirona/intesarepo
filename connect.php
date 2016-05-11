<?php
try {
  $host = 'ec2-54-228-219-2.eu-west-1.compute.amazonaws.com';
  $password = 'wEttOMA42PlEuhmQmdwSOtWZuI';
  $user='everrsslsbdsjo';
  $name_bd = 'd33bqbai8cac73';
  $dbh = new PDO("pgsql:host=".$host.";dbname=".$name_bd.",".$user.",".$password."");
  //echo "PDO connection object created";
  $dbh->prepare("SELECT * FROM event");
  $dbh->execute();
  $test=$dbh->fetch(PDO::FETCH_ASSOC);
  print_r($test);
}
catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
?>
