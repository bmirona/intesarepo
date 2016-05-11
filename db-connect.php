<?php

$conn_string = "host=ec2-54-228-219-2.eu-west-1.compute.amazonaws.com port=5432 dbname=d33bqbai8cac73 user=everrsslsbdsjo password=wEttOMA42PlEuhmQmdwSOtWZuI";
$dbconn = pg_connect($conn_string) or die('connection failed');
echo "Exist connexion" ;
