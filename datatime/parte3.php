<?php 
date_default_timezone_set("Africa/Casablanca") ; 
$date = date_create() ; 
echo date_format($date , "Y-F-l g a")."<br>" ; 
echo date_format($date , "Y-F-l G A")."<br>" ; 
echo date_format($date , "Y-F-l h a")."<br>" ; 
echo date_format($date , "Y-F-l H a")."<br>" ;  
echo date_format($date , "Y-t-z g:i:s A")
?>