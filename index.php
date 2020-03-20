<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,400,700" rel="stylesheet">
     <link rel="stylesheet" href="php.css">
    <title>php</title>
</head>


<body class="index">

    <main class="grid">
<header class="header">
    <h1 class="header-title">
        <a href="index.php">Clara Tricottet</a>
    </h1>
                
    <nav class="header-nav">
        <a href="login.php" >Connexion</a>
        <a href="logout.php" >Déconnexion</a>
        <a href="propos.html">à propos</a>
        <a href="contact.html">contact</a>
    </nav>
</header>



</main>
</div>
    <p>Bonjour <?php if(isset($_SESSION["account"]["username"]))
    {
        echo($_SESSION["account"]["username"]);
    }
    else
    {
        echo "NOT CONNECTED";
    }
        ?></p>

    <br>
   

    <div class="left">

<div class="container"> 
    <h2>Projets</h2>

 <?php

        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>
</div>

<div class="center">
<div class="container">
 <?php

        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>
</div>

<div class="right">
<div class="container">
 <?php

        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>
</div>

    

</body>
</html>