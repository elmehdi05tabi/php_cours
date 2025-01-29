<?php 
/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/
// echo file_get_contents("https://elzero.net",true);
echo file_put_contents("tabi.txt","\nc'est un noveau ligne ",FILE_APPEND) ; 
?>