<?php 
function chargement ($nomClass) {
    include($nomClass.".class.php") ; 
}
spl_autoload_register() ;    
$p1 = new personne("elmehdi",20) ; 
echo $p1->get() ; 
?>