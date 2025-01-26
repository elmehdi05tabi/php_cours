<?php 
  /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */
  

  echo str_replace("@","e","elm@hdi web sch@@l",$r) ; 
  echo "<br>" ;
  echo "nombre de counter est : $r" ; // 3   
  echo "<br>" ; 
  
  echo str_replace(["#","@"],"a","e#m@hdi web sch@@#") ;   #eamahdi web schaaa
  echo "<br>" ;
  echo str_replace(["#","@"],["l","e"],"e#m@hdi web sch@@#") ;   #elmehdi web scheel

  echo "<pre>";
  print_r(str_replace("one",1,["one","two","three","one","one"])) ; 
  echo "</pre>";

    echo "<pre>";
  print_r(str_replace(["one","two"],[1,2],["one","two","three","one","one"])) ; 
  echo "</pre>";
  //  si j'ai pas ecrire le valeur le fucntion remplace par chaine vide   
   echo "<pre>";
  print_r(str_replace(["one","two","three"],[1,2],["one","two","three","one","one"])) ; 
  echo "</pre>";
  echo "<pre>";
  print_r(str_replace(["One","Two","Three"],[1,2,3],["one","two","three","one","one"])) ; 
  echo "</pre>";

//   str_ireplece => le meme concepte de str_replece mais la deference elle est pas sensitive 
  echo "<pre>";
  print_r(str_ireplace(["One","Two","Three"],[1,2,3],["one","two","three","one","one"])) ; 
  echo "</pre>";
?>