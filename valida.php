<?php include('index.php'); ?>

<?php
if (!empty($_POST['login'] && $_POST['senha'])) {
    $dsn = 'mysql:host=localhost;dbname=projeto_pessoal';
    $usuario = 'root';
    $senhaBD = '';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // SELECIONANDO O BANCO DE DADOS E COLOCANDO PROTECAO DE SQL INJECTIOON
    try {
        $conexao = new PDO($dsn, $usuario, $senhaBD);

        # montando o select
        $query = "SELECT * FROM usuarios WHERE (login = ? AND senha = ?)";

        # mostrando o select
        echo $query;

        # executando o select
        $stmt = $conexao->prepare($query);

        $stmt -> bindValue(1, $_POST['login']);
        $stmt -> bindValue(2, $_POST['senha']);

        $stmt->execute();

        $usuario = $stmt->fetch();

            if(($usuario['login']) == $login){
                # encontrou
        # grava sessão loginOK e redireciona o usuário para a página loja.html
        $_SESSION['loginOK'] = 'Bem Vindo ' . $login;
        header("Location: loja.php");
            }else{
                # não encontrou
    # grava sessão loginErro e redireciona o usuário para a página de login
    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
    header("Location: index.php");
            }
        
        

    } catch (PDOException $e) {
        echo 'Cod. Erro: ' . $e->getCode() . 'Messagem: ' . $e->getMessage();
    }
}else {
    # campo usuário e senha não preenchido 
    # grava sessão loginErro e redireciona o usuário para a página de login
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: index.php");
}