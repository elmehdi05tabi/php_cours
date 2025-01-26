<?php 
  /*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */
// ! array_shift () 
echo "<h3 style='color:red;'>array_shift</h3>" ;
$chars = ["A", "B", "C", "D"];
echo "<pre>" ;  
print_r($chars) ; 
echo "</pre>" ;  
$first = array_shift($chars) ; 
echo $first ; 
echo "<pre>" ;  
print_r($chars) ; 
echo "</pre>" ;  
// ~ array_pop () 
echo "<h3 style='color:red;'>array_pop</h3>" ;
$last = array_pop($chars) ; 
echo $last  ; 
echo "<pre>" ;
print_r($chars) ; 
echo "</pre>" ;
//^ array_push () 
echo "<h3 style='color:red;'>array_push</h3>" ;
array_push($chars,"X","Z","W") ;
echo "<pre>" ;
print_r($chars) ; 
echo "</pre>" ;
$chars[] = "1" ;
echo "<pre>" ;
print_r($chars) ; 
echo "</pre>" ;
//* array_unshift () 
echo "<h3 style='color:red;'>array_unshift</h3>" ;
array_unshift($chars , "one","two","three") ; 
echo "<pre>" ;
print_r($chars) ; 
echo "</pre>" ;
?>