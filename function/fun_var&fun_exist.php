<?php
/*
Function 
- variable Function 
    ---php allow to use variable like function 
    --- when you append parentheses () to variblle php will look for function with the name 
- function exits 
   --- function_exists("func name")
*/
function one () {
    return "one from function <br> " ; 
}
// echo one() ;
$func1 = "one" ;
echo $func1() ;

function dit_bnj ($name) {
    return "bonjour $name <br>" ; 
} 
$func2 = "dit_bnj" ; 
print($func2("elmehdi")) ;  
function testing() {
    return "c'est une test : <br> " ; 
}
if (function_exists("testing")) {
    echo testing() ; 
}else {
    echo "cette function pas là " ;
}

echo strlen(("elmehdi tabi")) ; // 12 
echo "<br>" ;
$func3 = "strlen" ; 
echo $func3("elmehdi tabi" ) ;