<?php 

  /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */
//   ! array_marge() 
echo "<h3 style='color:red;'>array_marge</h3>" ; 
  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];
  echo "<pre>" ; 
  print_r(array_merge($merge_one,$merge_two)) ; 
  echo "</pre>" ; 
  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];
  echo "<pre>";
  print_r(array_merge($merge_three,$merge_four)) ; 
  echo "</pre>";
//~  array_replace()
echo "<h3 style='color:red;'>array_replace</h3>" ; 
$main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
$replace = ["One" => "HTML", "Four" => "Python"];
echo "<pre>" ;
print_r(array_replace($main,$replace)) ; 
echo "</pre>" ;
echo "<pre>" ; 
print_r(array_replace($merge_three,$merge_four)) ; 
echo "<pre>" ; 
//* array_rand() 
echo "<h3 style='color:red;'>array_marge</h3>" ; 
$nums = ["A", "B", "C", "D"];
echo  $nums[array_rand($nums)] ; 
echo '<pre>';
print_r(array_rand($nums, 3));
echo "</pre>" ;

//^ shuffle () 
shuffle($nums) ; 
echo "<h3 style='color:red;'>shuffle</h3>" ;
echo "<pre>";
print_r(($nums))  ;
echo "</pre>"; 
?>