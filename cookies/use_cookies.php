<?php
  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */
//   ! aprés une année la cookie est términer 
  setcookie("bgcolor","red",time()+ 60*60*24*30,"/") ; 
  setcookie("popup","done",strtotime("+ 1 month")) ; 
  echo "<pre>" ; 
  print_r($_COOKIE) ; 
  echo "</pre>" ; 
  
?>