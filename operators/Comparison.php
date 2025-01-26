<?php 
/**
operators 
 -used to perform operations on values .
 
 comparison operators 
 - used to compare two values 

 - part 1 
 * ==  => equal
 * !=  => not equal 
 * <> => not equal 
 * === => identical
 * !== => not identical 
*/
// test eqaul 
var_dump(100 == 100);
echo "<br>";
var_dump(100 == 200);
echo "<br>";
var_dump(100 == "100");
echo "<br>";
var_dump(100.0 == "100");
echo "<br>";
var_dump(100.0 != "100");
echo "<br>";
var_dump(100.0 <> "100");
echo "<br>";
var_dump(100.0 <> "200");
 echo "<h1 style=\"color:red\"> test identicle</h1>";
 var_dump(100 === 100);
echo "<br>";
var_dump(100 === 200);
echo "<br>";
var_dump(100 === "100");
echo "<br>";
var_dump(100.0 === "100");
echo "<br>";
var_dump(100.0 !== "100");
echo "<br>";
var_dump(100 !== "100");
echo "<br>";
var_dump(100.0 !== "200");