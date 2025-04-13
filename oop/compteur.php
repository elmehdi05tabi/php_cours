<?php 
function charger($par) {
    include($par.".class.php") ; 
}
spl_autoload_register("charger") ; 
session_start() ; 
$cpl2 = new Aduiance() ;
$cpl2->enregister() ;  
?>