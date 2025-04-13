<?php 
$server = 'localhost' ; 
$username = "root" ; 
$password = '' ; 
$db_name = "db_cours" ; 
// ! Connection In DataBase 
$con = new mysqli($server,$username,$password,$db_name) ; 
if ($con->connect_error) {
    echo "La connection n'exicte pas <br>" ; 
}else {
    echo " Connection  est  exicte <br>" ; 
} ; 
//* insert information 
// $sql = "INSERT INTO etudiant(nom_etd,premon_etd,date_n) VALUES ('tabi','elemhdi',16-05-2005)" ; 
// check insert 
// if ($con->query($sql)===true) {
//     echo ("les information sur base de donne <br>") ; 
// }else {
//     echo ("les infromation n'est pas sur les pas de donnee <br>") ; 
// }

// Update Data base 
$sql = "UPDATE etudiant SET nom_etd='Ahmed',premon_etd='mohsine',date_n='1980-10-16' WHERE id_etd = '1' " ; 
if ($con->query($sql)===true) {
    echo ("Messe à jour de base de donnée <br>") ; 
}else {
    echo ("Error de messe à jour de base de donnée <br>") ; 
}

// Suprimer les donnée 

$sql = "DELETE FROM etudiant WHERE id_etd=1" ; 
if ($con->query($sql)===true) {
    echo "les base do donnée est suprimer " ; 
}else {
    echo ("il y a une error ") ; 
}


?>