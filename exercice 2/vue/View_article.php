<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Initialiser les variables modélisant les messages d'erreur
$msgErrRef="";
$msgErrLib="";
$msgErrFour="";
$msgErrPV="";
$msgErrPrix="";
$msgErrQte="";
//Initialiser les valeurs saisies
$ref="";
$lib="";
$prix="";
$qte="";
$four=[];//declaration de la tableau =arraay(); ou =[];
$pointV=array();
//Initialiser la variable controlant le remplissage ddu formulaire
$rempli=false;

if(isset($_GET["ref"])){
    $rempli=true;

    //referénce
    if(empty($_GET["ref"])){
        $rempli=false;
        $msgErrRef="Vous devez saisie la reference.";
    }
    else $ref=$_GET['ref'];

    //libelle
    if(empty($_GET["lib"])){
        $lib=false;
        $msgErrLib="Vous devez saisie le libelle.";
    }
    else $lib=$_GET['lib'];

    //fournisseur    
    if(empty($_GET["four"])){
        $rempli=false;
        $msgErrFour="Vous devez saisie le(s) fournisseur(s).";
    }
    else $four=$_GET["four"];

    //point de vente
    if(empty($_GET["PV"])){
        $rempli=false;
        $msgErrPV="Vous devez saisie au moins un point de vente.";
    }
    else $pointV=$_GET["PV"];

    //prix
    if(empty($_GET["prix"])){
        $rempli=false;
        $msgErrPrix="Vous devez saisie le prix.";
    }
    else $prix=$_GET["prix"];

    //quantite
    if(empty($_GET["qte"])){
        $rempli=false;
        $msgErrQte="Vous devez saisie la quantité.";
    }
    else $qte=$_GET["qte"];


}


//<?php //if (in_array("fournisseur1",$four))echo "selested";

//selected="selected"
//$_SERVER appele de la paga lui meme
?>

<!---->

    <h1>Saisir un article</h1><br><br>
    <form action="../controleur/ControlArticle.php" method="GET">
        <table>
            <tr>
                <td><label for="ref">Référence</label>: </td>
                <td><input name="ref" type="text" value="<?=$ref?>" />
                <span style='color:red'> <?= $msgErrRef?></span> </td>
            </tr>
            <tr>
                <td><label for="libelle">Libellé</label>: </td>
                <td><input name="lib" type="text" value="<?=$lib?>" />
                <span style='color:red'> <?= $msgErrLib?></span></td>
            </tr>


            <tr>
                <td> <label for="four">Fournisseur</label>:</td>
                <td>
                    <select name="four[]" multiple >
                        <option value="fournisseur1" <?php if (in_array("fournisseur1",$four))echo "selected";?>>fournisseur1</option>
                        <option value="fournisseur2" <?php if (in_array("fournisseur2",$four))echo "selected";?>>fournisseur2</option>
                        <option value="fournisseur3" <?php if (in_array("fournisseur3",$four))echo "selected";?>>fournisseur3</option>
                    </select>
                    <span style='color:red'> <?= $msgErrFour?></span>
                </td>
                
            </tr>
            <tr>
                <td> <label for="PV[]">Point de vente</label></td>
                <td>
                    <input type="checkbox" name="PV[]" value="Sfax" <?php if (in_array("Sfax",$pointV))echo "cheked";?>>Sfax
                    <br>
                    <input type="checkbox" name="PV[]" value="Gabes" <?php if (in_array("Gabes",$pointV))echo "cheked";?>>Gabes 
                    <br>
                    <input type="checkbox" name="PV[]" value="Sousse" <?php if (in_array("Sousse",$pointV))echo "cheked";?>>Sousse
                    <span style='color:red'> <?= $msgErrPV?></span> </td>
            </tr>
            <tr>
                <td><label for="prix">Prix</label>: </td>
                <td><input name="prix" type="number" value="<?=$prix?>" />
                <span style='color:red'> <?= $msgErrPrix?></span></td>
            </tr>
            <tr>
                <td><label for="qte">Quantité en stock</label>: </td>
                <td><input name="qte" type="number" value="<?=$qte?>" />
                <span style='color:red'> <?= $msgErrQte?></span></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">

    </form>


    
</body>
</html>