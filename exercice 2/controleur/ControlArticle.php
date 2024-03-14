<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("../model/Article.php");
if(isset($_GET["ref"])){
    echo"<h2>Voici les informations de l'article saisi</h2>";
    echo"<table border='1'>
    <tr><th>Référence</th> <th>Libellé</th> <th>Fournisseurs</th> <th>Points de vente</th>
    <th>Prix</th> <th>Quantité</th> </tr>";

    $ref=$_GET["ref"];
    $lib=$_GET["lib"];

    $fours=array();
    if(!empty($_GET["four"]))
    $fours=$_GET["four"];

    $ptVentes=array();
    if(!empty($_GET["PV"]))
    $ptVentes=$_GET["PV"];

    $prix=$_GET["prix"];
    $qte=$_GET["qte"];    

    $art=new Article($ref,$lib,$fours,$ptVentes,$prix,$qte);
    echo "$art</table>";
}
else echo"Il faut passer par le formulaire!!";
?>
</html>