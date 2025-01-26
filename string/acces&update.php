<?php
/*
  String 
  - access elments 
  --- string is array of characters 
  --- access elments by index "zero based indexing"
  --- negative index are allowed 
  -update elemnts 
  --- update current elments 
  --- add nex elments 

  Search 
  - single-byte and multi-byte 
*/
// strlen() => camculer le nomrre des elements 

// 
$str = "Elzero" ;
echo "le premier lettre est : $str[0]<br>" ; 
echo "le 4eme lettre est : $str[3]<br>" ; 
echo "le nombre des lettres est :".strlen($str)."<br>";
echo "la dernier lettre est => $str[-1] <br>" ; 
echo "la dernier lettre est =>". $str[strlen($str)-1] ; 


echo "<br>" ;
echo "<br>" ;
echo "<br>" ;
//  Update  : 
echo $str ."<br>";
$str[0] = "A" ; 
echo $str  ;
$str[6] = "B";
echo "<br>" ;
echo $str ;  
?>