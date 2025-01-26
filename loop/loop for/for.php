<?php
/*
controle structer 
 -loop 
  For 
   - expression one run once at the first of the loop 
   - in the begining of in=teration expression two is checked [if true continue||break]
   - at the end pf nteration epression three are executed 
*/
$a = 1 ; 
while ($a <= 3 ) {
    echo "$a <br>" ; 
    $a++ ;   
} ;
// ---------------------------------------------
echo " #####  <br> " ; 
$i = 1 ;
for ($i==1 ;$i <= 3 ; $i++) {
    echo "$i<br>" ;
} ;
// ---------------------------------------------
echo " #####  <br> " ; 
$index = 1  ;
for (;;):
    if ($index == 4) : 
        break ;
    endif ; 
    echo "$index<br>" ;
    $index++ ;  
endfor ;
?>