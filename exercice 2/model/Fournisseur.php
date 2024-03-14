<?php
class Fournisseur{
    private $id,$nom;

    function __construct($id,$nom){
        $this->id=$id;
        $this->nom=$nom;
    }
    public function __get($attr) { 
        if (!isset($this->$attr))
        return "donner leur login et mot de pass!<br>";
        else return ($this->$attr);
    }
    public function __set($attr,$value) {
            $this->$attr = $value;
    }
    public function __isset($attr) {
        return isset($this->$attr );
    }
    public function __toString() {
        $f="<option value='$this->id'>$this->nom</option>";
        return $f;
    
    }
}

$a=new Fournisseur ("1","four1");
$b=new Fournisseur ("12","four12");
$c="$a.$b";
echo "<table> $c</table>";
//echo "<table> $b</table>";

?>