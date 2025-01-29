<?php 
/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/
// echo "<pre>" ; 
// print_r(file("tabi.txt")) ; 
// echo "</pre>" ; 
// echo count(file("tabi.txt")) ; 
$handel = fopen("tabi.txt","r") ; 
$line = 1 ; 
// while(! feof($handel)){
//     echo "Line $line => ".fgets($handel)."<br>" ; 
//     $line++ ; 
// }

for ($i = 0 ;$i < count(file("tabi.txt"));$i++) {
    echo fgets($handel)."<br>" ; 
}
?>