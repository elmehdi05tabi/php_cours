<?php 
  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */
   $str = "bonjour dans elmehdi tabi site web one beceupe chose ici very_very_very_good" ;  
   echo strlen($str)."<br>" ; 
   echo wordwrap($str,10,"<br>" ,true) ; 
   echo "<br>" ; 
   echo wordwrap($str,10,"<br>" ,true);
   echo "<br>" ; 
   echo "<hr>" ; 
//     ord donne le binare nobre  : 
   echo ord("a");  // 97  
   echo "<br>" ; 
   echo chr(97) ; // a
   echo "<hr>" ; 
   echo "<br>" ; 
   // le nombre de caractére méme  
  echo similar_text("elmehdi","elmehdii") ; 
  echo "<br>" ; 
   similar_text("elmeh#di","elme_hdi",$porcentage) ; 
  echo "le porcentage dans tous les deux mot est => $porcentage %"
  
?>