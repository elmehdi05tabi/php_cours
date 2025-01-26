<?php
/*
controle struecter 
  -if , elseif , else <=   alternate syntaxe 
*/
// if (10> 5 ) {
//         echo "good" ;
// }else {
//     echo "bad" ;
// }

// THIS IS NOTE ALTERNATE SYNTAXE 

// echo "<br>" ;
// if ( 10 > 10 ) echo "good " ;
// else echo "bad" ; 
// echo "<br>" ;
// if ( 10 > 10 ) 
// echo "good" ; 
// else 
// echo "bad"; 
// echo "<br>" ;
// if (10 > 10 ) echo "good" ; else echo "bad" ;

?>
<?php if (10 > 5) : ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello tis is testing</h1>
</body>
</html>
<?php
endif; // this for finish the conditoion  
?>

<?php  
if (10 > 10) :
    echo "fisrt " ;
elseif ( 10 > 12) :
    echo "second" ;
else :
    echo "laste" ;
endif ;
?> 