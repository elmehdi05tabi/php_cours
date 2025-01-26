<?php 
/*
Function 
  - function advanced training 
  - unpaking in arguments 

  search 
  -php Variadic function 
  -splate operators 
*/
$group_fo_skills = ["français" , "anglais","football","progrmation"] ;
function get_data($name ,$country = "private" ,...$skills ) {
     echo "bonjour  $name votre pays est :  $country <br>  " ;
     echo "votre  competance est : <br> " ;
     foreach ($skills as $skill) {
        echo"- $skill - <br>" ; 
     } 
     
}
get_data("elmehdi" ,"moroco" ,...$group_fo_skills );