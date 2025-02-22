<?php 
  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range-
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */
//   ! email 
  $email = "elmehdi@tabi.com" ; 
 echo  var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE)) ."<br>" ; 
//   ^ int 
$int = 90 ; 
 echo var_dump(filter_var(
    $int ,FILTER_VALIDATE_INT, ["flags"=> FILTER_NULL_ON_FAILURE  ,"options" => ["min_range"=> 50 , "max_range" => 90 ] ] 
))."<br>" ; 
$float = 66.5 ; 
 echo var_dump(filter_var($float ,FILTER_VALIDATE_FLOAT, ["flags"=> FILTER_NULL_ON_FAILURE  ,"options" => ["min_range"=> 50 , "max_range" => 90 ] ] 
))
?>