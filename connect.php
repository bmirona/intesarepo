<?php
try {
  $dbh = new PDO("pgsql:host=ec2-54-228-219-2.eu-west-1.compute.amazonaws.com port=5432 dbname=d33bqbai8cac73", "everrsslsbdsjo", "wEttOMA42PlEuhmQmdwSOtWZuI");
  echo "PDO connection object created";
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>