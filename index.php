<?php
//esse que to usando

$pdo = new PDO('mysql:host=localhost;dbname=cadastro', 'root', '');
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

//$sql2 = $pdo->prepare("DELETE FROM `usuarios` WHERE `nome` = 'Matheus' ");
//$sql2->execute();



include('header.php');
if ($page == 'home') {
    include('home.php');
}

if ($page == 'cadastro') {
    include('cadastro.php');
}

if ($page == 'login') {
    include('login.php');
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>



</html>