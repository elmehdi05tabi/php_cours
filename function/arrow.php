<?php 
/*
Function 
---arrow function 
--- short syntaxe for anonymose function 
--- automatic use varibles from parent scope 

--- Syntaxe 
   -- Function replace with fn 
   -- no need for curly braces 
   -- return is omitted 
*/
// arrow function with parametre 
$say_hello = fn($name)=>"hello";
echo $say_hello("elemhdi")  ; 
echo "<br>######################<br>" ;
// arrow function in vanriables : 
$say_hello = fn()=>"hello";
echo $say_hello() ;
echo "<br>######################<br>" ;
//  arrow function with paremetre in variable
$say_hello = fn($somone) =>"bojour $somone" ; 
echo $say_hello("elmehdi"); 
echo "<br>######################<br>" ;
//  inherite variable from parent scope is automatique 
$msg = "Hi" ;
$say_hi = fn ($somone) => "$msg  $somone" ;
echo $say_hi("elmehdi"); 
echo "<br>######################<br>" ;

//  pass anonymous function to function => array_map
$nums = [10,20,30,40,50];
$ajj_cinq=fn($item) => $item + 5 ;
$nums_after_add = array_map($ajj_cinq,$nums) ;
echo "<pre>";
print_r($nums_after_add) ;
echo "</pre>";

$nums_apre_ajout = array_map(fn($i)=>$i + 10,$nums);
echo "<pre>";
print_r($nums_apre_ajout) ; 
echo "</pre>";