<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Saisir un article</h1><br><br>
    <form action="../controleur/ControlArticle.php" method="GET">
        <table>
            <tr>
                <td><label for="ref">Référence</label>: </td>
                <td><input name="ref" type="text"/></td>
            </tr>
            <tr>
                <td><label for="libelle">Libellé</label>: </td>
                <td><input name="lib" type="text"/></td>
            </tr>


            <tr>
                <td> <label for="four">Fournisseur</label>:</td>
                <td>
                    <select name="four[]" multiple >
                        <?php include "../model/Fournisseur.php";
                        echo "$a";
                        echo "$b";
                        echo "$c"; ?>
                    </select>
                </td>
                
            </tr>
            <tr>
                <td> <label for="PV[]">Point de vente</label></td>
                <td>
                    <input type="checkbox" name="PV[]" value="Sfax" >Sfax
                    <br>
                    <input type="checkbox" name="PV[]" value="Gabes" >Gabes 
                    <br>
                    <input type="checkbox" name="PV[]" value="Sousse" >Sousse
                    </td>
            </tr>
            <tr>
                <td><label for="prix">Prix</label>: </td>
                <td><input name="prix" type="number"/></td>
            </tr>
            <tr>
                <td><label for="qte">Quantité en stock</label>: </td>
                <td><input name="qte" type="number"/></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">

    </form>


    
</body>
</html>