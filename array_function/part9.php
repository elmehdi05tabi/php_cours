<?php 
/*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

*/
//   ! array_map ()
echo "<h3 style='color:red;'>array_map</h3>" ; 
  function say_hello($fname,$lname) {
    return "hello Mr $fname $lname" ; 
  }
  $first_name = ["elmehdi","saad","hassan"] ; 
  $last_name = ["tabi","saadqi","bokrach"] ;
  echo "<pre>"; 
  print_r(array_map("say_hello",$first_name,$last_name)) ; 
  print_r(array_map(fn ($f,$l)=> "hello monssieure $f $l",$first_name,$last_name)) ; 
  echo "</pre>"; 
//~ array_filter () 
echo "<h3 style='color:red;'>array_filter</h3>" ; 


function check ($n1) {
    return $n1>4 ; 
}
  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
];
  echo "<pre>"; 
 print_r(array_filter($nums,"check")) ; 
  echo "</pre>"; 
   echo "<pre>"; 
 print_r(array_filter($nums,"check",ARRAY_FILTER_USE_KEY)) ; 
  echo "</pre>";
  function check1($n1,$n2) {
    return $n1>4 ||$n2>4 ; 
} 
   echo "<pre>";
 print_r(array_filter($nums,"check1",ARRAY_FILTER_USE_BOTH)) ; 
  echo "</pre>"; 
 
?>