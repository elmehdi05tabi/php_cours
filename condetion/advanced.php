<?php
/*
controle struecter 
  -if , elseif , else <=   advanced pratique 
*/
if ($_SERVER["REQUEST_METHOD"] === "POST"){
   if ($_POST['lange']== 'ar') {
     header("location:long/ar.php");
     exit();
   }
   elseif ($_POST['lange']=='en') {
     header("location:long/en.php");
     exit();
   }
   elseif ($_POST['lange']=='fr') {
    header("location:long/fr.php") ;
    exit();
   }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>support</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="userame">
        <select name="lange">
            <option value="ar">arabic</option>
            <option value="en">english</option>
            <option value="fr">france</option>
            <option value="sp">spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>
</html>