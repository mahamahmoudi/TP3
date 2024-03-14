<?php



include"../model/User.php";

if(isset ($_GET['log']))
{
    $u = new User($_GET['log'],$_GET['motpass']);
    if($u->connect())
    echo $u;//appele methode toString automatiquement
    else
    echo "login ou mot de passe incorrect !";

}
else
{
    header('Location:../vue/authentification.html');
}

?>