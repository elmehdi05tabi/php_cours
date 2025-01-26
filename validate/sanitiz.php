<?php 

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */
// ! sanitize email : 
$email = "tabi@gmail.com"  ;
var_dump(filter_var($email ,FILTER_SANITIZE_EMAIL))   ; 
// ^ sanitize int 
echo "<br>" ;   
$int = "06    10    58   96   33 " ;    
var_dump(filter_var($int,FILTER_SANITIZE_NUMBER_INT)) ; 

echo "<br>" ; 
// & sansitize float 

$float = "1,5688,999,7.55556" ; 
echo var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT , 
   ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
)) ; 
echo "<br>" ; 

// ~ sanitize lien 
  $url = "https://el         zer¥¥¥¥¥o.org";

  var_dump(filter_var($url, FILTER_SANITIZE_URL));

  echo "<br>";  
?>