<?php
/*
controle structer 
 -loop 
  Break ,Countinue 
   - Break ends execution of (for , foreach , while , do-while or switch)
   - skip current iteraion
   */

//  Break => Ends the loop ;  
  $conuties = ["Maroco" , "Egypte" ,"Usa" , "Ksa" , "France","Geramny"] ; 
  foreach ($conuties as $country) {
    if ($country == "Ksa") {
        break ; 
    }
    echo "$country <br>" ; 
  }
  echo "####### <br>" ;  
//    Countinue : 
  $conuties = ["Maroco" , "Egypte" ,"Usa" , "Ksa" , "France","Geramny"] ; 
  foreach ($conuties as $country) {
    if ($country == "Ksa") {
        continue ; 
    }
    echo "$country <br>" ; 
  }
?>