<?php

//making the connection to mysql

$hostname = "localhost" ;
$username = "root";
$password1 = "";
$dbname = "peddlers";

$dbc = mysqli_connect($hostname, $username, $password1, $dbname) OR die("Could not connect to the database, ERROR: ".mysqli_connect_error());

 //set encoding
mysqli_set_charset($dbc, "utf8");

?>