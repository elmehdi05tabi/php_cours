<?php
/*
Function 
-introduction  and DRY concept => DRY : don't repeat your self
-parameter
-Argument 
*/
echo "hello elmehdi <br>";
echo "hello tabi <br>";
echo "hello osma <br>";
echo "============================================= <br>" ;
function say_hello($someone ) {
    echo "hello  Mr $someone how ara you ? <br>" ;
}
say_hello("elmehdi");
say_hello("tabi");
say_hello("osama");
?>