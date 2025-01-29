<?php 
 /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */
  $total = round(disk_total_space("C:/") /1024/1024/1024)  ; 
  $free = round(diskfreespace("C:/") /1024/1024/1024)  ; 
  echo "total de espace dans mon pc est : $total GB <br>" ; 
  echo "total de espace vide dans mon pc est : $free GB <br>" ; 
  var_dump(file_exists("elmehdi.html")) ; 
  echo "<br>" ; 
  echo round(filesize("elmehdi.html")/1024) ; 
?>