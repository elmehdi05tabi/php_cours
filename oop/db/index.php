<?php 
try {
    $pdo = new PDO("mysql:host=localhost;dbname=tutophp","root","") ; 
}catch(PDOException $e){
    echo $e->getMessage() ; 
}
//!  insertion des valuers
/*
$req = $pdo->prepare("INSERT INTO fonctions(fonction,role) VALUES (:fc,:rl)") ; 
$req->execute(["checkdate","verfier la vildate de date"]) ; 
 autre truque
$req->execute([":fc"=>"strlen",":rl"=>"returner la longure d'un chaine"])
*/
//* modifier les valuers
/*
$req = $pdo->prepare("UPDATE fonctions SET fonction = 'print_r', role='afficher un tablau' WHERE id=1 ") ; 
$req->execute() ; 
*/
// ? suprimer des valuers
/* $req = $pdo->prepare("DELETE FROM fonctions WHERE id=4") ;
$req->execute() ; 
*/  

// afficher le tablau ; 
$req = $pdo->prepare("SELECT *  FROM fonctions") ; 
$req->setFetchMode(PDO::FETCH_ASSOC) ;
$req->execute() ; 
$tab = $req->fetchAll() ; 
foreach($tab as $row) {
    echo $row["id"]." ".$row["fonction"]." ".$row["role"]."<br /> " ; 
}
?>