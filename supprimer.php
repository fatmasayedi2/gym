<?php
include 'connexion.php';
if($_GET['id']) {
 $id = $_GET['id'];
 $req= "SELECT * FROM inscription WHERE id = {$id}";
 $result=mysqli_query($cx,$req);
 $data=mysqli_fetch_assoc($result);
 $cx->close();
?>
<!DOCTYPE html>
<html>
<head>
 <title> Supprimer un membre </title>
</head>
<body>
<h3> Voulez-vous vraiment supprimer  ?</h3>
<form action="supprimer2.php" method="post">
 <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
 <button type="submit"> confirmer </button>
 <a href="accueil.php"><button type="button">annuler</button></a>
</form>
</body>
</html>
<?php
}
?>

