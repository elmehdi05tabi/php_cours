<?php
/*
String Fucntion 

 - strpos (string[required] , value[required] , start positon [optional ]) case-sensitive 
 - strrpos (string[required] , value[required] , start positon [optional ]) case-sensitive 
 -stripos (string[required] , value[required] , start positon [optional ]) case-sensitive 
 -strripos (string[required] , value[required] , start positon [optional ]) case-sensitive 
 substr_count (string[required] , value[required] , start positon [optional ]) case-sensitive 
*/
echo "<h3>strpositaion</h3>" ; 
var_dump(strpos("elmehdi elmehdi" , "e")) ; 
echo "<br>" ; 
var_dump(strpos("elmehdi elmehdi" , "e" , 6)) ; 
echo "<br>" ; 
var_dump(strpos("elmehdi elmehdi" , "E")) ; // false
echo "<br>" ; 
var_dump(strpos("elmehdi elmehdi" , "e" , -1)) ; // false
echo "<br>" ; 
var_dump(strpos("elmehdi elmehdi" , "e" , -4)) ;
echo "<br>" ; 
var_dump(strpos("elmehdi elmehdi" , "e" , -12)) ;
echo "<br>" ; 
echo "<h3>str right position</h3>" ; 
//  strrpos => il est chercher sur la dernier elments 
var_dump(strrpos("elmehdi elmehdi" , "e")) ; // 11 
echo "<br>" ; 
var_dump(strrpos("elmehdi elmehdi" , "e" ,6)) ; // 11 

echo "<h3>stripos</h3>" ; 

var_dump(stripos("elmehdi elmehdi" , "E" )) ;
//  le meme concepte mais ici les lettres est sensitive : 
echo "<h3>substr_count</h3>" ; 
//  str_count() => calculer combien élment il est dans le string 
echo substr_count("elmehdi tabi le monde est trés beux " ,"e") ;
echo "<br>" ; 
echo substr_count("elmehdi tabi le monde est trés beux " ,"e" , 10)  ; 
echo "<br>" ; 
echo substr_count("elmehdi tabi le monde est trés beux " ,"e" , 10 , 15)  ;

?>