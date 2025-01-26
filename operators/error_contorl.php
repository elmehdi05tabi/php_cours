<?php 
/*
 Operators 
 - used to perform operations on values . 

   error control operators 
    - controls the  errors 

    @
    -variables 
    - include 
*/

// variables 
// $a = 10 ;
// $b =@$a or die("this is error for var");
// echo "test $b";

// file()
// echo "<pre>";
// print_r(@file("elmehdi_tabu.txt") or die("is and error for file")) ;
// echo "</pre>";

// included ()
(@include("elmehdi.php") or die("this is error for include")) ;