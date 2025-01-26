<?php
/*
controle structer 
 -loop 
  Foreach
*/
$countries = ["mr","eg","qa" , "usa"] ;
echo "<pre>" ;
print_r($countries) ;
echo "</pre>" ;
/*this for print the array whith the value  */
// foreach ($array as $value) {
    
// }
foreach ($countries as $contry) {
    echo "$contry <br>" ;
}
$country_whit_discnt = ["mt"=> 50 , "eg" => 10 ,"usa" => 35 ,"qa"=>70 ] ;
echo "<pre>";
print_r($country_whit_discnt) ; 
echo "</pre>";
// this foreach for print the array white the key and value 
// foreach ($array as $key => $value) {
    
// }
foreach ($country_whit_discnt as $nam_cont => $discant) {
    echo " The Discant Of $nam_cont Is <b>$discant</b> <br>" ;
}
?>