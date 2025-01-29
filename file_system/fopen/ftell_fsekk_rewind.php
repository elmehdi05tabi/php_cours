<?php 
/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/
$handel = fopen("tabi.txt","r") ; 
// echo ftell($handel)."<br>" ; // 0 
// echo fgets($handel)."<br>" ; 
// echo fgets($handel)."<br>" ; 
// rewind($handel) ; 
// echo fgets($handel)."<br>" ; 
// echo ftell($handel)."<br>" ;  
echo fgets($handel)."<br>" ;
fseek($handel,-10,SEEK_END) ; 
echo fgets($handel)."<br>" ;
fclose($handel) ; 
echo mb_strlen("Elzero\r\nWeb\r\nSchool\r\nI Love El","8bit") ; 
?>