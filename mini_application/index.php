<?PHP 
if($_SERVER["REQUEST_METHOD"]==="POST"){
$nom = $_POST["nom"] ; 
$prenom = $_POST["prenom"] ; 
$login = $_POST["login"] ; 
$pas = $_POST["pas"] ; 
$repass = $_POST["repass"] ; 
$valider = $_POST["Valider"] ; 
$message = "" ;    
}
if(isset($valider)){
    if(empty($nom)) $message .= "<li style='color:white;text-align:center'>Nom Invalide</li>"; 
    if(empty($prenom)) $message .= "<li style='color:white;text-align:center'>Prenom Ivalider</li>"; 
    if(empty($login))$message .= "<li style='color:white;text-align:center'>Login Invalider</li>"; 
    if(empty($pas)) $message .= "<li  style='color:white;text-align:center'>Mot De Pass Invalider</li>"; 
    if(empty($repass)|| $repass!=$pas) $message .= "<li style='color:white;text-align:center'>Mot De Pass Non Indecter</li>";
    if(empty($message)){
        include("connectiondb.php") ; 
        $req = $con->prepare("SELECT id FROM user WHERE login=? limit 1") ; 
        $req->setFetchMode(PDO::FETCH_ASSOC) ;
        $req->execute(array($login)) ; 
        $tab =  $req->fetchAll() ; 
        if(count($tab)>0){
            $message.="<li style='color:white;text-align:center'>Login Déja Execute</li>";
        }else{
            $ins = $con->prepare("INSERT INTO user(date,nom,prenom,login,pass) values (?,?,?,?,?)") ; 
            $ins->execute(
                [date("Y-m-d H:i:s"),$nom,$prenom,$login,$pas] 
            );
            header("location:logine.php") ; 
        }
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
        <h1>Inscription</h1>
         <a href="logine.php">Déja inscrir</a>
    </header>
    <form action="" method="POST">
        <input type="text" placeholder="Nom" name="nom">
        <input type="text" placeholder="Prénom" name="prenom">
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Mot De Pass" name="pas">
        <input type="password" placeholder="Confirme Mot De Pass" name="repass">
        <input type="submit" value="S'iscrire" name="Valider">
    </form>
    <?php if (!empty($message)){;?>
        <div id="message"><?php echo $message?></div>
        <?php }?>
</body>
</html>