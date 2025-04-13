<?php 
class Voiture1{
    public $color ;
    public $vitess;
    public function __construct($cl="bleu",$vt=0){
        $this->color = $cl ; 
        $this->vitess = $vt ; 
    } 
    public function __destruct()
    {
        return $this->vitess=0 ; 
    }
    public function acceler (){
        return $this->vitess++ ; 
    }
    public function afficherVit(){
        return $this->vitess ; 
    }
}
$berline = new Voiture1('rouge',10) ; 
echo $berline->afficherVit(); 
?>