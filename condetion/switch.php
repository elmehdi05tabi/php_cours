<?php
/*
controle structer 
 - Switch 
 Syntax 
  switch (expretion) {
   case 1 : 
     code block 1
     break ;
   case 2 : 
     code block 2
     break ;
   case 3 : 
     code block 3
     break ;
   default : 
       default code block 
  }
*/
 $day = "ths" ;
 switch ($day) {
   case "sat" :
     echo "hello today is $day we are open from 10:16";
     break ;
   case "sun" : 
      echo "hello today is $day we ara open from 9 :00 " ;
      break ; 
   case "fry" : 
     echo "hello todya is $day we are open from 8:00 at 12:00";
     break ;
   case "mon" :
   case "ths" : 
     echo "hello today is $day we are open from 12 : 00 " ;
     break ; 
   default : 
     echo "uknown day";
   
 }
?>