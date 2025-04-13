<?php 
try {
    $con = new PDO("mysql:host=localhost;dbname=tutophp","root","") ; 
}catch (PDOException $e){
    echo $e->getMessage() ; 
}
?>