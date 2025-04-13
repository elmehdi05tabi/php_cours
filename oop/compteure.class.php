<?php 
//  qui j'ai ecrire le mot clée final avant le class je fais cette class ne dois pas un class mére
 abstract class Compteur{
    protected $fb ; 
    protected $nbr ; 
    public function __construct(){
        $this->fb = fopen("compteur.txt","r+") ; 
        $this->nbr=fgets($this->fb) ; 
        $this->inc() ;

    }
    public function inc(){
        // if (@$_SESSION["dejavisiter"]!="oui"){        
            $this->nbr++ ;
            fseek($this->fb, 0);
            fputs($this->fb,$this->nbr) ; 
            $_SESSION["dejavisiter"] = 'oui' ; 
        // }
    }
    public function aff(){
        return $this->nbr; 
    }
    public function __destruct(){
        fclose($this->fb) ; 
    }
    abstract public function f() ; 
}
// session_start() ; 
// $cpt = new Compteur() ; 
// echo $cpt->aff();
?>