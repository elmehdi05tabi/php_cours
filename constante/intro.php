<?php
/*
Constants 
 - That  value cannot change during the execution 
 - constants always uppercase 
 */
define("EL_NAME", "elmehdi") ;
define("NUMBER" , 15 );
$name = EL_NAME ;
$number = NUMBER ;
echo nl2br (
    "hello my name is $name \n
    I am very happy because i leraning php in $number days   \n
    is amazing 
    "
)
?>