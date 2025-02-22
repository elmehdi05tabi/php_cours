<?php
session_start()  ; 
$name = $_SESSION["name"] ; 
$id = $_SESSION["id"] ; 
echo "Bonjour $name Votre Id Est $id " ; 
?>