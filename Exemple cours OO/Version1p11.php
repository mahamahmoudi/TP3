<?php
class Personne {
    //private $nom;
    //private $prenom;
    private $data=array();
    function __construct($nom, $prenom) {
    $this->data["nom"]=$nom;
    $this->data["prenom"] = $prenom;
    }
    public function __get($attr) {
    if (!isset($this->data[$attr])) return "erreur<br>";
    else return ($this->data[$attr]);
    }
    public function __set($attr,$value) {
    $this->data[$attr] = $value; 
    }
    public function __isset($attr) {
        echo"isset dane redefinir <br>";
    return isset($this->data[$attr] );
    }
    public function __toString() {
    $s="la personne est: ".$this->data["nom"]." ".$this->data["prenom"]."<br>";
    return $s;
    } 
}
$p = new Personne("Maha","Mahmoudi");
echo $p-> nom. "<br>";
echo $p->a;
$p->a = new Personne("Salah","Tounsi");
echo $p->a;
echo "*****exemple 2****** <br>";//comparision d'objet
$t1=new Personne("ali","Tonsi");
$t2=new Personne("ali","Tonsi");
echo $t1==$t2;//return 1 c-a-d se sont meme objet
$t1=$t2;//pour mettront en meme adresse
echo $t1===$t2;//retourner 1
?>