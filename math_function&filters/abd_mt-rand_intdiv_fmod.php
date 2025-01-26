<?php 
  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */
//   ! absoulte 
echo abs(10) ;
echo "<br>" ; 
echo abs(0) ;
echo "<br>" ; 
echo abs(-20) ;
echo "<br>" ; 
//   ~ mt_rand 
  echo mt_rand() ; 
  echo "<br>" ; 
  echo mt_rand(9 , 30) ;  
  echo "<br>" ; 
  echo mt_getrandmax() ; 
  echo "<br>" ; 
  //   ^ intdiv () 
  echo 10 / 5 ; 
  echo "<br>" ; 
  echo 11 / 5 ; 
  echo gettype(11/5) ; 
  echo "<br>" ;
  echo intdiv(11,5)  ;
  echo gettype(intdiv(11,5) ) ; 
  
  echo "<br>" ;
  //   * fmod 
  echo 31 % 10 ; 
  echo "<br>" ;
  echo 31.5  % 10 ; 
  echo gettype(31.5  % 10) ; 
  echo "<br>" ;
  echo fmod(31.5,10)  ;
  echo gettype( fmod(31.5,10)) ; 
  ?>