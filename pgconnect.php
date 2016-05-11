<?php
$dbconn = pg_connect("host=ec2-54-228-219-2.eu-west-1.compute.amazonaws.com port=5432 dbname=d33bqbai8cac73 user=everrsslsbdsjo password=wEttOMA42PlEuhmQmdwSOtWZuI");

if (!$dbconn) {


    die("Error in connection: " . pg_last_error());
}
