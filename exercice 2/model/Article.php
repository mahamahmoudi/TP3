<?php
class Article{
    private $lib,$ref,$PV,$prix,$qte,$four;

    function __construct($lib,$ref,$PV,$prix,$four,$qte){
        $this->ref=$ref;
        $this->lib=$lib;
        $this->four=$four;
        $this->PV=$PV;
        $this->prix=$prix;
        $this->qte=$qte;
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

        $r="<tr><td>$this->ref</td>
        <td>$this->lib</td> <td><ul>";
        foreach($this->four as $elem)
        {
            $r.="<li>$elem</li>";

        }
        $r.="</ul></td> <td><ul>";
        foreach($this->PV as $elem)
        {
            $r.="<li>$elem</li>";

        }
        $r.="</ul></td>";
        $r.="<td>$this->prix</td>
        <td>$this->qte</td></tr>";
        return $r;
    }
}

//$a=new Article ("libsouris","ref20",["Sfax","Sousse"],"pr100",["four1","four2"],"qt500");
//echo "<table> $a</table>";
?>
