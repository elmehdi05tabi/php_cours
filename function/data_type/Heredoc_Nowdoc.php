<?php
/*
======================================
=---------------
= string and escaping
=-------------------
= heredoc => write in dauple
=nowdoc => write un singlez
======================================
*/
 $name = "elmehdi";
//  heredoc 
 echo <<< "heredoc"
 hello php i am   $$$$ ''''' \\\\
 so happy for larning  $name
heredoc ;
echo "<br>";
echo "<br>";
echo "<br>";
// nowdoc 
echo <<< 'nowdoc'
hi i am alaysw happy  beacause i 
am happy always  
hehehehe
but my name is $name
nowdoc;

echo "<ul>";
echo "<li>".$name."</li>";
echo "<li>".$name."</li>";
echo "<li>".$name."</li>";
echo "<li>".$name."</li>";
echo "</ul>";

echo <<< "navlink"
 <ul>
 <li>$name</li>
 <li>$name</li>
 <li>$name</li>
 <li>$name</li>
 </ul>;
navlink;


?>