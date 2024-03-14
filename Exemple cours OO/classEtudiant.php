<?php
class Etudiant{
    private $nom, $prenom;
    function __construct($nom,$prenom){
        $this->nom =$nom;
        $this->prenom =$prenom;
    }
    public function __toString(){
        $s = "Le nom et le prenom de l'etudiant est :<br>
        Nom: $this->nom <br>
        Prénom: $this->prenom <br>";
        return $s;
    }
    public function __set($attr,$val){
        $this->attr = $val;
        echo"attribut ajouter dynamiquement<br>";
    }
    public function __get($att){
        echo"attribut dynamique retourner";
        return $this->$att;
    }
    function __destruct(){
        echo"destruction de l'objet<br>";
    }

}
//echo tostring   //$e est un pointeur fih 
//modifier _get
$e= new Etudiant("Maha","Mahmoudi");
echo $e;
$e->age=21;   
//echo $e->age;
$e->statut="Etudiant"; 
//echo $e->dateN; 
$e=null;//nfara8 e na3mal =null  //appele automatiquement de la fonction __destuct et affiche=> destruction de l'objet
$e2= new Etudiant("Ali","Tounsi");  //affiche=> destruction de l'objet
//fin de la programme "affiche=> destruction de l'objey" car il ya des instruction n'ont utiliser pas

?>