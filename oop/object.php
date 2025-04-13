<?php 
class Voiture {
    private $color = 'rouge' ; 
    public $vittess = 0 ;  
    public function afficherColor(){
        return $this->color ; 
    }  
    public function changeColor ($cl) {
        $this->color=$cl ; 
    }
    public function acceleration(){
        $this->vittess++ ; 
    }
    public function afficherVittess(){
        return $this->vittess ; 
    }
}
$bmw = new Voiture() ; 
$bmw->changeColor('blueViolet') ; 
echo $bmw->afficherColor() ; 
echo '<br/>' ;
$bmw->acceleration() ;
$bmw->acceleration() ;
$bmw->acceleration() ;
$bmw->acceleration() ;
echo $bmw->afficherVittess() ; 
echo '<br/>' ;
$berline = new Voiture() ; 
echo $berline->afficherColor() ; 
?>