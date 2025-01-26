<?php 
/*
Function 
  - default parameter value
  - using 
  - test data 
  - Skip Arguments 
*/
function get_data($country="Private",$name="Private",$age = "Private" ,$address = "private address") {
    $line_one = "votre pays est $country et votre  nome est $name <br>";
    $line_two ="et votre age est  $age vous avez vive dans $address <br>";
    return $line_one .$line_two ; 
}
echo get_data(address : "settat mimona ")
?>