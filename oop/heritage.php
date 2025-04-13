<?php 
class Compteur{
    private $fb ; 
    private $nbr ; 
    public function __construct(){
        $this->fb = fopen("compteur.txt","r+") ; 
        $this->nbr=fgets($this->fb) ; 
        $this->inc() ;

    }
    public function inc(){
        if (@$_SESSION["dejavisiter"]!="oui"){        
            $this->nbr++ ;
            fseek($this->fb, 0);
            fputs($this->fb,$this->nbr) ; 
        }
        $_SESSION["dejavisiter"] = 'oui' ; 
    }
    public function aff(){
        return $this->nbr; 
    }
    public function __destruct(){
        fclose($this->fb) ; 
    }
}
session_start() ; 
$cpt = new Compteur() ; 
echo $cpt->aff();
?>