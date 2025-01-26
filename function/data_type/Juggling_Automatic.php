<?php
/*
====================================
======== data types =========== 
=--------------- 
=== type juggling + automatic tybe coneversion
====================================

*/
echo 1 + "2" ; // 3 
echo '<br>';
echo gettype(1 + "2"); // integer 
echo '<br>';
echo  true ; // 1 
echo '<br>';
echo  gettype(true + true ) ; // integer 
echo '<br>';
echo 1 + "5 elmehdi"; // warning  
echo '<br>';
echo gettype( 1 + "5 elmehdi"); // intger => warning  
echo '<br>';
echo 10 + 20.45 ; // => 30.45
echo '<br>';
echo  gettype(10 + 20.45) ;  // double => float 
echo '<br>';

?>
