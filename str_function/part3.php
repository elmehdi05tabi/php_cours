<?php
/*
  String Fucntion 
   - chunk_split(string[required] , length[optional] , end[optionaly])
   - strlen(string[requird])
   - str_split(string[required] , length[optional])
   - strip_tags (string[requird] , allowed[optional])
   -nl2br(string[required],xhtml [optional])
*/
// chunk_split() =>  diviser mon chen en tranche comme je voudrais 

echo chunk_split("elmehdi tabi dd101",2,"#")  ; 
echo "<br>" ; 
// str_split() =>  change le chaine à array of elment 
echo "<pre>" ; 
print_r( str_split("elemhdi")) ; 
echo "</pre>" ; 
// strip_tags => desactive le travaille des balise html 
echo "<h3>elemhdi <b>tabi</b></h3>" ; 
echo "<br>" ;
echo strip_tags("<h3>elemhdi <b>tabi</b></h3>" , "<b>") ; 
echo "<br>" ; 
echo nl2br("elmehdi \ntabi \nzid hayd" )

?>