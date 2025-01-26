<?php 
  /*
    Filter Functions

    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  */

//   echo $_GET["num"];
   $var = filter_input(INPUT_GET,"num",FILTER_SANITIZE_NUMBER_INT)
   
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="tel" name="num">
        <input type="submit">
    </form>
    <?php 
    echo "votre numéro de téléphone est : $var" ; 
    ?>
</body>

</html>