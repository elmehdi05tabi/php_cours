<?php 
  /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */
  echo substr_replace("onetwo",2,0) ;  // 1 
  echo "<br>" ; 
  echo substr_replace("onetwo",2,3) ;  // one2
  echo "<br>" ; 
  echo substr_replace("onetwo",2,5) ;  // onetw2
  echo "<br>" ; 
  echo substr_replace("onetwo",2,-1) ;  // onetw2
  echo "<br>" ; 
  echo substr_replace("onetwo",2,2,2) ;  // on2wo
  echo "<br>" ; 
  echo substr_replace("onetwo",2,1,4) ;  // o2o
//    avec chaine de carractéer : 
  echo "<br>" ; 
  echo substr_replace("elmehdi_web_scholle","A",8,3) ; //elmehdi_A_scholle
  //  dans le negative value il return la dernier  éléments dans cette position 
  echo "<br>" ; 
  echo substr_replace("elmehdi_web_scholle","A",8,-1) ; //elmehdi_Ae
  echo "<br>" ; 
  echo substr_replace("elmehdi_web_scholle","A",8,-8) ; //elmehdi_A_scholle
  echo "<br>" ; 
  echo substr_replace("elmehdi_web_scholle","A",8,-11) ; //elmehdi_Aweb_scholle

  echo "<pre>"  ;
  print_r(substr_replace(["one","two","three"] , 2 ,0)) ;  
  echo "</pre>"  ; 
?>