<?php 
/*
  /*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

  */
// ! array_chunk() :
echo "<h3>array_chunk() </h3>" ;
$amis = ["elmehdi","tabi","amine","yassine","saad","hassan","mohamed"] ; 
echo "<pre>";
print_r(array_chunk($amis,2)) ; 
echo "<pre>";

$pays = ["mr"=>"marroco","ksa"=>"kigdom saudi arabia","eg"=> "egybte","fr"=> "france","sp"=> "spain" ] ;
echo "<pre>" ;
print_r(array_chunk($pays,2,true) ) ; 
echo "<pre>" ;

//& array_change_key_case() 
echo "<h3>array_change_key_case()  </h3>" ;
echo "<pre>";
print_r(array_change_key_case($pays,CASE_UPPER)) ; 
echo "<pre>";

//* array_combine() 
echo "<h3>array_combine() </h3>" ;
$keys = ["TB","SD","CH"] ;  
$value = ["tabi","sadqi","chafique"] ; 
echo "<pre>";
print_r(array_change_key_case(array_combine($keys,$value))) ; 
echo "<pre>";


//^ array_count_values () 
echo "<h3>array_count_values () </h3>" ;
$array = ["a","b","c","b","b","a"] ; 
echo "<pre>" ;
print_r(array_count_values($array)) ;
echo "<pre>" ;
?>