<?php 
/*
Function 
  - advanced examples with paremtres and arguments 
  - real life example 
*/
function say_hello($name,$lastn) {
    echo "hello $name $lastn<br> " ; 
}
say_hello("elmehdi","tabi");

function deep_frezer ($item) {
    if ($item == "water") {
        echo "Make ice <br>" ; 
    }elseif($item == "coca cola") {
        echo "Make it cold <br>" ; 
    }elseif ($item == "fruit"){
        echo "make it fresh <br>" ; 
    }else {
        echo "uknown $item " ;
    }
}
deep_frezer("water") ;
deep_frezer("coca cola") ;
deep_frezer("taxi") ;
deep_frezer("fruit") ;
?>