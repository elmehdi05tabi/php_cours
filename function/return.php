<?php 
/*
Function 
  - optional return $ Null
  - End after return 
*/

$prizes = ["Pc","Playstaion","Xbox","Apple Tv" ,"Laptop","iPad","iPhone"] ;
function get_num ($nam1 ,$nam2) {
    return $nam1 + $nam2 ;  
}
// get_num(1,2) ; 
// echo $prizes[3] ;


// var_dump($prize_num)

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nam1" placeholder="entre le premier nombre : ">
        <input type="text" name="nam2" placeholder="entre le deuxiem  nombre : ">
        <input type="submit" value="Go ">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"]== "POST" ) {
    $nam1 = $_POST['nam1'] ;
    $nam2 = $_POST['nam2'] ;
    $prize_num = get_num($nam1 ,$nam2)  ; 
    echo " filecitaion  vous gagné :  ${prizes[$prize_num]}" ;
}
?>
</body>

</html>