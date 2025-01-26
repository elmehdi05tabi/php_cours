<?php
/*
Function 
  - passing arguments by reference 
  --- by default , function arguments are passed by value 
  --- if the value of the arguments inside the function changed it will not change outside 
  --- to change it outside pass the argument by refence 

  - return type declarations 

  search 
   - PHP Strict Mode 
*/

function aj_cinqu (&$numbre) {
    $numbre+=5;
    return $numbre ; 
}
$n = 15 ; 
echo aj_cinqu($n)."<br>";// 20
echo "$n <br> "; // 20

function calc ($n1 ,$n2) : int {
    return $n1 +$n2 ; 
}
echo calc(10 ,10 ) ; 
echo '<br>' ; 
echo gettype((calc(10.2,9.8))) ;  // integer  