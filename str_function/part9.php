<?php 
  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */
  echo strstr("elmehdi tabi" ,"t")  ; // tabi  
  echo "<br>" ;
  echo strstr("elmehdi tabi" ,"m")  ; // mehdi tabi  
  echo "<br>" ;
  echo strstr("elmehdi tabi" ,"t",true)  ; // elmehdi
  echo "<br>" ;
   echo var_dump( strstr("elmehdi tabi" ,"T")) ; 
  echo "<br>" ;
//   print avec espace elmehdi 7 + espace = 8 
  echo strlen(strstr("elmehdi tabi" ,"t",true) ) ;  // 8 
//   stristr => comme la mais stristr insensitive 
   echo  strstr("elmehdi tabi" ,"T") ;// tabi

echo "<hr>" ; 
//    nomber formate 

echo 10_000_000 ; 
  echo "<br>" ;
echo number_format(1000000.18966,2,".","\\")
?>