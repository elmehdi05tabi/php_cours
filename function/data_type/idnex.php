<?php
/*
=========================================================
= datatype
= -------
=bool => boolean 
=int => integer 
= float => floting point number | double 
= string
= array
= other types 
= gettype()
 =========================================================
 */
echo gettype(true);
echo "<br>";
echo gettype(False);    
echo "<br>";
echo gettype(trUE); # boolen values in php note   sensitive   
 echo "<br>";
 echo  gettype(100);
 echo "<br>";
 echo  gettype(-200);
 echo "<br>";
 echo  gettype(100.5);
 echo "<br>";
 echo  gettype(-70.5);
 echo "<br>";
 echo  gettype(0);
 echo "<br>";
 echo  gettype("hello elmehdi how are you today");
 echo "<br>";
 echo  gettype('hello elmehdi how are you today');
 echo "<br>";
 echo  gettype(array("mar" => "morocco" , "ksa"=> "saudi arabia","usa" => "united statyt of america"));
 echo "<br>";
 echo  gettype(array("morocco" ,"saudi arabia","united statyt of america"));
 echo "<br>";
 echo  gettype(["morocco" ,"saudi arabia","united statyt of america"]);
 echo "<br>";

?>