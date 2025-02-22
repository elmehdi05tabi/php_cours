<?php
session_start()  ; 
isset($_SESSION["views"]) ? $_SESSION["views"]++ : $_SESSION["views"] = 1  ; 
echo "bonjour ".$_SESSION["name"]. " le nombre de fois que tu entre cette page est ".$_SESSION["views"] ;
echo "<a href='test2.php' > test2<a/>"
?>