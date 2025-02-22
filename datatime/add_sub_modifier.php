<?php 
  /*
    Date And Time Functions

    - date_interval_create_from_date_string()
    - date_add()
    - date_sub()
    - date_modify()
  */
date_default_timezone_set("Africa/Casablanca") ; 
$d = date_create() ; 
// date_add($d,date_interval_create_from_date_string("10 years")) ;  
echo date_format($d,"Y-m-d")."<br>"; 
date_sub($d,date_interval_create_from_date_string("48 days")) ; 
echo date_format($d,"Y-m-d")."<br>"  ; 
date_modify($d,"+ 10 years"); 
echo date_format($d,"Y-m-d") ; 
?>