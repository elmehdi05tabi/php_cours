<?php 
 if(isset($_COOKIE["background"])) {
    echo "<style>body{background:".$_COOKIE["background"]."}</style>" ; 
 }
 if($_SERVER["REQUEST_METHOD"]=="post") {
    setcookie("background",$_POST["bg-color"],strtotime("+1 min")) ; 
    header("location: ".$_SERVER["REQUEST_URI"]) ; 
    exit() ; 
 }
?>
<form action="" method="post">
    <input type="radio" name="bg-color" value="black"> Noir
    <input type="radio" name="bg-color" value="yellow">Jeun
    <input type="submit" value="change color">
</form>
<!-- <?php

  /*
    Cookies
    - Practice
  */

  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }

?>

<form action="" method="POST">
    <input type="color" name="bg-color">
    <input type="submit" value="Choose Color">
</form> -->