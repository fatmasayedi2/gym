<?php
include 'connexion.php';
 $id = $_POST['id'];
 $req="DELETE FROM inscription where id={$id}";
 if(mysqli_query($cx,$req)){
 echo "<h3>Supprimé avec succès!!</h3>";
 echo "<a href='accueil.php'><button type='button'>Retour</button></a>";






 }
 $cx->close();
?>