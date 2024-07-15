<!DOCTYPE html>
<html lang="en">
<head>

     <title>Gymso Fitness</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <?php
include("connexion.php");
$req="SELECT * FROM inscription";
$res=mysqli_query($cx,$req);
?>


<form action="rechercher.php" method="post">
  <table align="center">
    <tr>
      <td>
        <input type="text" name="rech">
      </td>
      <td>
        <input type="submit" value="Rechercher">
        <a href="inscription.html"><button type="button">S'inscrire</button></a>
      </td>
    </tr>
  </table>
</form> <br>
    

<table align="center" border="1" >
    <tr>
        <th><h6>Id</h6></th>
        <th><h6>Name</h6></th>
      
        <th><h6>Email</h6></th>
        <th><h6>Phone</h6></th>
       
       
        <th><h6>Action</h6></th>
    
        
    
    </tr>
    <?php

if(mysqli_num_rows($res)>0)
{

while($row=mysqli_fetch_assoc($res))
{
?>

    <tr>
        <td>
            <?php echo $row['id']   ?>
        </td>
        <td>
            <?php echo $row['name']   ?>
        </td>
        
        <td>
            <?php echo $row['email']   ?>
        </td>
        <td>
            <?php echo $row['phone']   ?>
        </td>
        
       
        
        <td>
      <a href='modifier.php?id=<?php echo $row['id'] ?>'><button type='button'>Modif</button></a>
      <a href='supprimer.php?id=<?php echo $row['id'] ?>'><button type='button'>Supp</button></a>
    </td>
        
      
    </td>

    </tr>


    <?php
}

}
else
{
?>
<tr>
    <td colspan="9" align="center"><font color="red">Pas de données disponible</font></td>
</tr>
<?php
}
?>
</table>
    
            </div>
        </div>
    </div>
    
   

<script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>