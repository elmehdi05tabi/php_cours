<?php 
class personne {
    public $nom ; 
    public $age ;
    public function __construct($nom,$age){
        $this->nom = $nom ; 
        $this->age = $age ; 
    } 
    public function get(){
        return "Bonjour Mon Nom est ".$this->nom." et Mon Age Est ".$this->age ; 
    }
}
?>