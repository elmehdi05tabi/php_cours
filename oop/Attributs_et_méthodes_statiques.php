<?php 
class Facture {
    const tva = 20 ; 
    private static $att ;
    public function __construct()
    {
        self::$att = 'Poo' ; 
    }
    // afficher attribute static
    public function afficherAtt(){
        return self::$att ; 
    }
    // modifier attribute static 
    public  function modifierAtt($val){
        self::$att = $val  ;
    }
    // Method Static 
    public static function montanTtc($ht){
        return $ht * (1+self::tva/100) ; 
    }
}
echo Facture::montanTtc(1000) ; 
echo "<br/>" ; 
// intance de premier class 
$ob1 = new Facture() ; 
// intance de deuxiem class 
$ob2 = new Facture() ; 
echo $ob1->afficherAtt() ;
echo "<br/>" ; 
$ob1->modifierAtt("Poo en Php") ; 
echo $ob1->afficherAtt() ;  
echo "<br/>" ; 
echo $ob2->afficherAtt() ; 

?>