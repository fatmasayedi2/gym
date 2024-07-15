
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
<div class="container" style="display: flex; justify-content: start-end">
    <div class="row">
        <div class="col-md-10">

        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Login</label>
                <input type="email" name="email" class="form-control" style="width: 350%;" >
            </div>
            <div class="mb-3">
                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="password" name="motdepasse" class="form-control" style="width: 350%;">
            </div>
            <br>
            <input type="submit" name="envoyer" class="btn btn-info" value="Se connecter">
        </form>

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
<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $login = htmlspecialchars(strip_tags($_POST['email'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getAdmin($login, $motdepasse);

        if($admin){
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: admin/afficher.php');
        }else{
            header('Location: index.php');
        }
    }

}

?>