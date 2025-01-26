<?php
/*
string fucntion 
 - parse_str (string[required] , array[required])
 - quotemeta(string[required]) 
 -str_pad(string[required],length[required],string[optional],pad flag[optional])
  --- STR_PAD_BOTH 
  --- STR_PAD_LEFT 
  --- STR_PAD_RIGHT
  - strtr(string[required] , from[required],to [required] || strtr(string[required],array [required])) 
  
*/
//  Parse_str => prendre les donneer avec methdod post ou get et toi te peut access dans cette info 
parse_str("name=elmehdi&email=tabi@n.com&el=windows",$query)  ; 
echo "<pre>" ;
print_r($query) ; 
echo "</pre>" ;
echo $query["name"] ; 
echo "<br>" ;
echo $query["email"] ; 
echo "<br>" ;
echo $query["el"] ; 
echo "<br>" ;

echo "hello #  () [] + .<br>" ; 
//  quotemeta faire scape en les caractéres spesiou 
echo quotemeta("hello #  () [] + .<br>")  ; 


// str_pad() =>  ajjouter un elemenat dans votre chaine 
echo "<hr>" ; 
echo str_pad("1",4,0,STR_PAD_BOTH) ; 
echo "<br>"  ;
echo str_pad("15",4,0,STR_PAD_RIGHT) ; 
echo "<br>"  ;
echo str_pad("289",4,0,STR_PAD_LEFT) ;
echo "<br>"  ;
echo str_pad("4879",4,0,STR_PAD_LEFT) ;
echo "<hr>" ; 
// strtr() => str transition changer elemnt par elments  

echo strtr("elmehd@ tab@ nad@","@","i") ; 

$transition = ["@"=>"i","#"=>"d"] ;
echo "<br>" ; 
echo strtr("elemh#@ tab@ na#@" ,$transition)
?>