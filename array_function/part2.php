<?php 

  /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */
//! array_reverse() 
echo "<h3 style='color:red;'>array_reverse</h3>" ; 
  $amis = ["elemhdi","tabi","ossama","morad","brahim",["asmae","mona"]]  ;
  echo "<pre>";
  print_r(array_reverse($amis)) ; 
  echo "</pre>";
//   pour le méme index on utilise 
echo "<pre>";
print_r(array_reverse($amis,true)) ; 
echo "<pre>";

//& array_flip() => change mot clée par valeu  
echo "<h3 style='color:red;'>array_flip</h3>" ; 
  $pays = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
  echo "<pre>" ;
  print_r(array_flip($pays)) ; 
  echo "</pre>" ;

//* count() 
echo "<h3 style='color:red;'>count</h3>" ; 
  $counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
];
echo count($counting)."<br>";
echo count($counting,true) ;

//~ in_array
echo "<h3 style='color:red;'>in_array</h3>" ; 
$search = ["1", 2, 3, 4];
if (in_array(1,$search,true)) {
    echo "exicte" ; 
}else{
    echo "n'exicte pas " ; 
}
//^ array_key_exists
echo "<h3 style='color:red;'>array_key_exists</h3>" ; 
$cours = [
    "javascript" => 90 , 
    "css" => 50 , 
    "php" => 60 , 
    "python" => 80 , 
] ; 
if (array_key_exists("php",$cours)) {
    echo "le cours est existe dans note chaine et le pris est :". $cours['php'] ; 
}else {
    echo "le cours n'existe pas " ; 
}

?>