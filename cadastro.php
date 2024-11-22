<?php
if (isset($_POST['action'])) {
    $name = $_POST['Nome'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES(null,?,?,?)");
    $sql->execute(array($name, $email, $senha));

   
    echo 'usuario foi cadastrado';
}

?>




<div class="container">
    <form method="post">
        <input type=text name="Nome" placeholder="insira seu nome" requird />
        <input type=text name="Email" placeholder="insira sua seu email" required />
        <input type=text name="Senha" placeholder="insira sua senha" required />
        <input type=submit value="Criar cadastro" name="action">
    </form>
</div>