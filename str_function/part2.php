<?php 
/*
String function : 
implode (separators[optional] , array [requird] => join() is alias)
explode (separators[optional] , str [requird] , limit[optional])
str_shuffle(string[required])
strrev(str[required])
trim(str[required],charslist[optional])
rtrim(str[required],charslist[optional])
ltrim(str[required],charslist[optional])
--- space ""
--- tab \t
--- new line \n 
--- carriage return \r
--- vertical tab "\x0B"
--- NULL "\0"
*/

// implode => faire des espace entre les elemnts de votre array  
echo "<h3>implode</h3>" ; 
$fir = ["elmehdi","saad","hassan" ,"ali"] ; 
echo implode(",",$fir) . "<br>" ; 
echo implode(":",$fir) . "<br>" ; 
echo implode( $fir) . "<br>" ; 
echo implode("%",$fir) . "<br>" ; 

echo "<h3>explode</h3>" ;
//  explod => change une string à array 
echo "<pre>";
print_r(explode("'" , "elmhdi tabi j'ai 19 ans j'habite à settet ") ) ; 
echo "</pre>";
echo "<h3>str_shuffle et strrev</h3>" ;
// str_shuffle() =>  melange votre chaine 
echo str_shuffle("elmehdi")."<br>" ; 
echo strrev("elmehdi")."<br>" ; 

echo "<h3>trim</h3>" ;
echo trim("##elmehdi##","#")."<br>" ; 
echo trim("@##elmehdi#@#","@#")."<br>" ; 
echo ltrim("##elmehdi##","#")."<br>" ; 
echo rtrim("##elmehdi##","#")."<br>" ; 
?>