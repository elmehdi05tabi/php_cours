<?php
  /*
    Sessions
    - Session Is Stored On The Server
    - Session Store Only A User Key In Cookie To Know Its You
    - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
    - You Need To Add It Before Any Output
  */
session_start() ; 
$_SESSION["name"] = "elmehdi" ; 
$_SESSION["id"] = 20051605 ; 
echo "<a href='test.php'>Test<a/>" ; 
?>