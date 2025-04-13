<?php 
$server = "localhost" ; 
$user = 'root' ; 
$ps = '' ; 
$db_name = "afficher" ; 
$connec = new mysqli($server,$user,$ps,$db_name) ; 
if ($connec->connect_error) {
    echo "<p id='check'>Il Y a Un Propléme dans la connection</p>" ; 
}else {
    echo "<p id='check'>la connection va bien </p>" ; 
} ; 
if ($_SERVER["REQUEST_METHOD"]==="post") {
    $nom = $_POST['nom'] ; 
    $prenom = $_POST['prenom'] ; 
    $email = $_POST['email'] ; 
    $address = $_POST['address'] ; 
    $sql = "INSERT INTO personne (nom,prenom,email,address) VALUES ('?','?','?','?')" ;
    $connec->execute_query($sql) ;  
    $connec->execute_query($nomn,$prenom,$email,$address) ; 
    if ($connec->query($sql)) {
    }else{
        echo "<p id='insertInfo'>N'est Pas Valide</p>" ; 
    }
}
$connec->close() ; 
?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nom" placeholder="entre votre nom"> <br>
        <input type="text" name="prenom" placeholder="entre votre prenom"> <br>
        <input type="text" name="email" placeholder="entre votre date de email"> <br>
        <input type="text" name="address" placeholder="entre votre date de address"> <br>
        <input type="submit" value="Valide">
        <?php 
    ?>
    </form>
</body>

</html>