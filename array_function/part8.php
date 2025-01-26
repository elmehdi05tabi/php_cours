<?php 
  /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function
  */
//   ! sort () 
echo "<h3 style='color:red;'>sort</h3>" ; 
    $names = ["Elmehdi", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
    sort($names) ; 
    echo"<pre>" ; 
    print_r($names) ; 
    echo"</pre>" ; 
// & rsort 
echo "<h3 style='color:red;'>rsort</h3>" ; 
    rsort($names) ; 
    echo"<pre>" ; 
    print_r($names) ; 
    echo"</pre>" ; 
// ~ asort () 
echo "<h3 style='color:red;'>asort</h3>" ; 
  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];
    rsort($countries) ; 
    echo"<pre>" ; 
    print_r($countries) ; 
    echo"</pre>" ; 
// ^ arsort () 
echo "<h3 style='color:red;'>arsort</h3>" ; 
    arsort($countries) ; 
    echo"<pre>" ; 
    print_r($countries) ; 
    echo"</pre>" ; 
// * ksort () : 
echo "<h3 style='color:red;'>ksort</h3>" ; 
$codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];
ksort($codes) ;
echo "<pre>" ; 
print_r($codes) ; 
echo "<pre>" ; 
//? krsort () 
echo "<h3 style='color:red;'>krsort</h3>" ; 
$codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];
krsort($codes) ;
echo "<pre>" ; 
print_r($codes) ; 
echo "<pre>" ; 

// natsort () : 
echo "<h3 style='color:red;'>natsort</h3>" ; 
$files = ["Photo1.png", "Photo20.png", "Photo3.png"];
sort($files) ; 
echo "<pre>" ;
print_r($files)  ; 
echo "</pre>" ;
natsort($files) ; 
echo "<pre>" ;
print_r($files)  ; 
echo "</pre>" ;
?>