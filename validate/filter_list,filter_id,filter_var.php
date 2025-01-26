<?php 
  /*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
 */ 
// ! filter_list 
echo "<pre>" ; 
print_r(filter_list()) ; 
echo "</pre>" ; 
// ^ filter_id 
echo filter_id("boolean") ."<br>" ; 
// & filter_var  
$var = "on" ;  // true || 1 || yes || on 
if(filter_var($var , FILTER_VALIDATE_BOOL )) // (filter_var($var,258))
 {
    echo "This Is True" ;
}else {
    echo "This Is False" ; 
}

?>