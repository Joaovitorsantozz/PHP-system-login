<?php

$sql = $pdo->prepare("SELECT `email` FROM `usuarios` ");
$sql->execute();
$dbEmail = $sql->fetchAll();
$existEmail = false;


if (isset($_POST['action'])) {
    $emailForm = $_POST['Email'];
    $passwordForm = $_POST['Senha'];
    foreach ($dbEmail as $key => $value) {
        if ($emailForm == $value['email']) {
            $existEmail = true;
            break;
        }
    }
}

if ($existEmail) {
    echo "email existe";
    $sql = $pdo->prepare("SELECT email, senha FROM usuarios WHERE email = :email");
    $sql->bindParam(':email', $emailForm); // Protege contra SQL Injection
    $sql->execute();
    $user = $sql->fetch(PDO::FETCH_ASSOC); 

    if($user['senha']==$passwordForm){
        echo '<br>'.'login autorizado';
    }else {
        echo '<br>'.'senha incorreta';
    }
} else if (!$existEmail) {
    echo "email nao existe";
}

//agora falta fazer a verificação de se o email existe e senha condiz com o email




?>




<div class="container">
    <form method="post">
        <input type=text name="Email" placeholder="insira sua seu email" required />
        <input type=text name="Senha" placeholder="insira sua senha" required />
        <input type=submit value="Fazer Login" name="action">
    </form>
</div>