<?php 
/*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
*/
echo lcfirst("Elmehdi Tabi Dd101 <br> ") ;//first letter in string lower 
echo ucfirst("elmehdi tabi dd101 <br> "); //first letter in string upper 
echo strtolower("elmehdi tabi dd101 <br> "); // lower text 
echo strtoupper("elmehdi tabi dd101 <br> "); //upper text 
echo ucwords("elmehdi tabi dd101 <br> ");   
echo ucwords("elmehdi tabi|dd101 <br> ","|");   
echo str_repeat("elemhdi <br>",4) ; 

?>