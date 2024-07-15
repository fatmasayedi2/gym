<?php

$servername="localhost";
$username="root";
$password="";
$dbname="bd";



               
$cx= new mysqli($servername,$username,$password,$dbname);



if(!$cx)
	echo("Problème de connexion");




?>

