<?php 
/*
 Math Function 
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
*/
echo round(7.99)."<br>" ; 
echo round(7.50)."<br>" ; 
echo round(7.49)."<br>" ; 
echo round(7.10)."<br>" ; 
// !-----------------------
echo round(7.99,1)."<br>" ; // 8 
echo round(7.954,2)."<br>" ; // 7.95 
echo round(7.993,1)."<br>" ; //8
echo round(7.548,2)."<br>" ;  // 7.55
// ^------------------ 
echo round(5.50,0,PHP_ROUND_HALF_UP) ."<br>" ;  // 6 
echo round(5.50,0,PHP_ROUND_HALF_DOWN) ."<br>" ; // 5 
echo round(4.50,0,PHP_ROUND_HALF_ODD) ."<br>" ;  // 5
echo round(6.50,0,PHP_ROUND_HALF_EVEN) ."<br>" ; // 8
?>