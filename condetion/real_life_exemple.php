<?php
/*
controle struecter 
  -if , elseif , else <= real lifa example  
*/
// if 
$page = "about" ; 
if ($page =="about") {
    echo "thsi is the page " ;
}

echo "<br>" ;
// if , else 
$title = "elmehdi tabi" ; 
if ($title == "" ) {
    echo "this is empty title " ;
}
else {
    echo "hello $title" ; 
}

echo "<br>" ;
// if , elseif , else 
$lang = "france" ;
if ($lang == "arabic") {
    echo "مرحبًا" ;
}
elseif ($lang=="english") {
    echo "hello" ; 
}
elseif ($lang == "spanish") {
    echo "hola" ;
}
elseif ($lang == "france") {
    echo "bonjour " ;
}
else {
    echo " this is uknown languge : " ;
}

