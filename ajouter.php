


<?php
include("connexion.php");
$name=$_POST['name'];

$email=$_POST['email'];
$phone=$_POST['phone'];

$cx = mysqli_connect("localhost","root","");
mysqli_select_db($cx,"bd");
$req="INSERT INTO inscription(name,email,phone) VALUES('$name','$email','$phone')";


if(mysqli_query($cx,$req)){

    echo "<br><h3> Nouveau membre ajouté avec succès</h3>";
    echo "<a href='inscription.html'><button type='button'>Retour</button></a>";
    echo "<a href='accueil.php'><button type='button'>Home</button></a>";
    } 
   
 


?>     


