<?php 
/*
Function 
  - variable argument list 
  --- fun-num_args()
  --- fun-get_arg(index)
  --- fun-get_args()
  Spread Syntax in JS 
*/
function calclate (...$nums) {
    // echo "Number of Argument :".func_num_args() . "<br>"; 
    // echo "argument index number 3 is :".func_get_arg(3) . "<br>"; 
    // print_r(func_get_args());
    // $result = 0 ; 
    // foreach (func_get_args() as $i ) : 
    //     $result += $i ; 
        
    // endforeach ;
    // print($result) ; 
    $somme = 0  ;
    foreach( $nums as $arg ){
        $somme+=$arg ;
    } 
    $nmbr = func_num_args() ;
    echo "la somme est => $somme  <br> 
    et le nombre des variables $nmbr "  ;
}
calclate(10 ,20,50,30,100,2,15,36,79,15,78,2) ;
?>