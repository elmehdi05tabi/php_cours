<?php 
/*
controle stracture 
  - nested if condation and training 
*/
$name = "elemhdi" ;
$is_student = true ;
$is_orpahnt = true  ;
$country = "morocco" ; 
$country_dicsant = 50 ;
$price = 100 ;
$student_descant = 10 ;
$orpha_discnat = 15 ; 
if ($country == "morocco") {
   if  ($is_student == true) {
     if ($is_orpahnt==true) {
        echo "hello $name" ;
        echo '<br>' ; 
        echo "country  discant : $country_dicsant ";
        echo '<br>' ; 
        echo "student descant  : $student_descant ";
        echo '<br>' ; 
        echo " orpha discant   : $orpha_discnat   " ;
        echo '<br>' ; 
        echo "the finale price is :"
        .($price-$country_dicsant-$student_descant-$orpha_discnat) ; 
     }
     else {
        echo "hello $name" ;
        echo '<br>' ; 
        echo "country  discant $country_dicsant and student dicant $student_descant" ;
        echo '<br>' ; 
        echo "the finale price is :".($price-$country_dicsant-$student_descant) ; 
     }
   

   } else {
    echo "hello $name" ;
    echo '<br>' ; 
    echo "country  discant $country_dicsant" ;
    echo '<br>' ; 
    echo "the finale price is :".($price-$country_dicsant) ; 
   }

} else {
  echo "hello $name" ;
  echo '<br>' ; 
  echo "no discant" ;
  echo '<br>' ; 
  echo "the finale price is : $price" ; 
}
?>
