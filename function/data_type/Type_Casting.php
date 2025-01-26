<?php
/*
=========================================================
= datatype
= -------
=bool => boolean 
=int => integer 
= float => floting point number | double 
= string
= array
= object 
=null
= other types 
= gettype()
=search for settype 
 =========================================================
 */

echo 5 + (integer) '10 lesson';
print("<br>");
echo 5 +  (int)'10 lesson';
print("<br>");
echo 10.5 + 20 ;
print("<br>");
echo gettype( (int) 10.5 + 20) ;
print("<br>");
echo 10.5 + 15.5 ;
print("<br>");
echo  gettype(10.5 + 15.5) ;
print("<br>");
echo  gettype( (int)(10.5 + 15.5) );
print("<br>");

// ================ 
// settype() 
$var="55.5";
settype($var , "integer" );
echo $var;
print("<br>");
$a= 60.88;
echo 100 + settype($a ,"integer" );