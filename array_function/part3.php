<?php 
  /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array
  */
//   ! array_keys 
echo "<h3 style='color:red;'>array_keys</h3>" ; 
   $amis = ["elmehdi", "Ahmed", "Sameh", "Mahmoud", "Gamal", "elmehdi", "Eman", 1, "1"];
   echo "<pre>"; 
   print_r(array_keys($amis) ) ;
   echo "</pre>";
   echo "<pre>"; 
   print_r(array_keys($amis,"elmehdi") ) ;
   echo "</pre>";
   echo "<pre>"; 
   print_r(array_keys($amis,1,true) ) ;
   echo "</pre>";
//~ array_values
echo "<h3 style='color:red;'>array_values</h3>" ; 
  $pays = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
  echo "<pre>" ;
  print_r(array_values($pays)) ; 
  echo "</pre>" ;
//& array_pad ()
echo "<h3 style='color:red;'>array_pad</h3>" ; 
$pad = ["A", "B", "C", "D"];
echo "<pre>" ;
print_r(array_pad($pad,10,"#")) ;
echo "</pre>" ;
echo "<pre>" ;
print_r(array_pad($pad,-10,"#")) ;
echo "</pre>" ;
echo "<pre>" ;
print_r(array_pad($pad,2,"#")) ;
echo "</pre>" ;
//^ array_product
echo "<h3 style='color:red;'>array_product</h3>" ; 
$produit = [2,50,9,10]  ; 
echo array_product($produit)  ; 
echo "<h3 style='color:red;'>array_sum</h3>" ; 
$produit = [2,50,9,10]  ; 
echo array_sum($produit)  ; 
?>