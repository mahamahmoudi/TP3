<?php
class User{
    private $log,$motpass;
    function __construct($log,$motpass){
        $this->log=$log;
        $this->motpass=$motpass;
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
        $s="Connection réussi avec votre login :".$this->log."<br>";
        return $s;
    }
    
    public function connect(){
        if($this->log=="admin" && $this->motpass=="admin")
        return true;
        else 
        return false;   
    }
    

}

?>