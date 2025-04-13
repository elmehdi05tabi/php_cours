<?php 
class Facture {
    const tva = 20 ; 
    public function montant($ht){
        return $ht * (1+Facture::tva/100) ;        
    }
}
$fact1 = new Facture() ; 
echo $fact1->montant(1000) ; 
// afficher le contant
echo "<br>" ; 
echo Facture::tva ; 

?>