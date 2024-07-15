<?php

include("connexion.php");

$rech=$_POST['rech'];


$req="SELECT * FROM inscription where id like '%$rech%' or name like '%$rech%' or email like '%$rech%' or phone like '%$rech%'";
$res=mysqli_query($cx,$req);
?>



<div >
        <br>
    <table  align="center" border="1">
    <thead>
        <tr >
            <th >id</th>
            <th >name</th>
          
            <th >email</th>
            <th >phone</th>
           
            <th >action</th>
            

        </tr>
    </thead>

<?php
while($row=mysqli_fetch_assoc($res))
{
?>


<tbody>

    <tr >
        <td >
            <?php echo $row['id']   ?>
        </td>
        <td >
            <?php echo $row['name']   ?>
        </td>
      
        <td >
            <?php echo $row['email']   ?>
        </td>
        <td >
            <?php echo $row['phone']   ?>
        </td>
      

        
        <td >
            <a href="modifier.php?id=<?php echo $row['id'] ?>" ><button type='button' >Modif</button></a>
            <a href="supprimer.php?id=<?php echo $row['id'] ?>"><button type='button' >Supp</button></a>
        </td>

    </tr>

<?php
}
?>

    
   