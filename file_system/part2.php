<?php 
  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */
//   ! is_dir => donne si il dossier ou non 
  var_dump(is_dir("hhh")); 
  echo "<br>" ; 
  var_dump(is_dir("elmehdi.html")) ; 
//~ mkdir => creé un dossier  
//   mkdir("cr7") ;
//   mkdir("php_sicoul\lile\bro",0700,true)  ;   
  rmdir("php_sicoul")
?>