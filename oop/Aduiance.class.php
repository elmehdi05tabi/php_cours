<?php 
include("compteure.class.php") ; 
class Aduiance extends Compteur{
    private $id ; 
    public function __construct()
    {
        // Compteur::__construct() ; 
        parent::__construct() ; 
        $this->id = fopen("audience.txt","a+") ; 
    }
    public function enregister(){
        fputs($this->id,date("Y-m-d H:i:s "." : ".$this->nbr."\r\n")) ; 
    }
    public function f() {} 
}
?>