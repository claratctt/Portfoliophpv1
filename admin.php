<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
 <a href="logout.php" >Connexion<?php
session_start();
$_SESSION["account"] = [];
header('Location:index.php');
?> </a>
</body>
</html>