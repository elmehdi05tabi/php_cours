<?php 
if($_SERVER["REQUEST_METHOD"]==='POST'){
    session_start() ; 
    $login = $_POST["login"] ; 
    $pas = $_POST["pas"] ; 
    $valider = $_POST["Valider"] ;
    $message = "" ;     
}
if(isset($valider)){
    include("connectiondb.php") ; 
    $res = $con->prepare("SELECT * from user where login=? and pass=? limit 1") ; 
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array($login,$pas)) ; 
    $tab = $res->fetchAll() ; 
    if(count($tab)==0){
        $message="<li>Mouvaisse Login Ou Mot De Pass Incorrect</li>" ; 
    }else{
        $_SESSION["autoriser"] = "oui" ; 
        $_SESSION["nom_prenom"] = strtoupper($tab[0]["nom"])." ". strtoupper($tab[0]['prenom']) ; 
        header("location:session.php") ; 
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
         <a href="index.php">S'inscri</a>
    </header>
    <form action="" method="POST">
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Mot De Pass" name="pas">
        <input type="submit" value="S'iscrire" name="Valider">
    </form>
    <?php if (!empty($message)){;?>
        <div id="message"><?php echo $message?></div>
        <?php }?>
</body>
</html>