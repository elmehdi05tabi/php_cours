<?php 
 /*
 assign variables by refernce 
 - by defeault , variables are assigne by value 
 - assigne by refernce make variables allias or pointer to annother 
 - we assign by refernce in &  
  Searsh 
  Refrense are not pointers 
 
 */
// $a ="elmehdi";
// $b = &$a ;
// $b ="hala madrid";
// // $b ="tabi";
// echo $a ;
// echo '<br>';
// echo $b ;
// echo '<br>'

$x = 2;
$y = $x;
$z = &$x;
$z = 5 ;
echo $x ; 
echo '<br>' ;
echo $y ;
echo '<br>' ;
echo $z ;
?>