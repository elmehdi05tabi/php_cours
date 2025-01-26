<?php 

  /*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */
// Normal function with parametre 
function say_hello($name) {
    return "hello $name" ;
}
echo say_hello("elmehdi")  ; 
echo "<br>######################<br>" ;
// anonymos function in vanriables : 
$say_hello = function () {
    return "hello" ; 
} ;
echo $say_hello();
echo "<br>######################<br>" ;
//  anonymos function with paremetre in variable
$say_hello = function ($somone) {
    return "bojour $somone" ; 
} ;
echo $say_hello("elmehdi"); 
echo "<br>######################<br>" ;
//  inherite variable from parent scope
$msg = "Hi" ;
$say_hi = function ($somone) use($msg){
    return "$msg  $somone" ; 
} ;
echo $say_hi("elmehdi"); 
echo "<br>######################<br>" ;

//  pass anonymous function to function => array_map
$nums = [10,20,30,40,50];
function ajj_cinq ($item) {
   return $item + 5 ;
}
$nums_after_add = array_map("ajj_cinq",$nums) ;
echo "<pre>";
print_r($nums_after_add) ;
echo "</pre>";

$nums_apre_ajout = array_map(function($i){ return $i + 10 ;} , $nums);
echo "<pre>";
print_r($nums_apre_ajout) ; 
echo "</pre>";
?>
