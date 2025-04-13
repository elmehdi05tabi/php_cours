<?php 
session_start() ; 
if($_SESSION['autoriser']!="oui"){
    header("location:logine.php") ; 
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dd{
            color: white;
            font-size: 100px;
            text-align: center;
            margin-top: 50px;
        }
        span {
            color: orange;
        }
    </style>
</head>
<body>
    <header>
        <h1>Espace Privé</h1>
         <a href="deconnection.php">Quitter La Session</a>
    </header>
    <h1 class="dd">
        Bonjour<span> <?php echo $_SESSION["nom_prenom"]?></span>
    </h1>
</body>
</html>