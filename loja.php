
<?php

session_start();

# testa se existe sessão loginOK
if (isset($_SESSION['loginOK'])) { ?>
    <div class="msg">
        <?php
    # recupera e mostra o valor da sessão loginErro 
    echo $_SESSION['loginOK'] . '<br><br>';
    ?>
</div>
<?php } else{ ?>  <?php 
    
    # não encontrou
    # grava sessão loginErro e redireciona o usuário para a página de login
    
    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
    
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos | Sobre</title>
    <link rel="stylesheet" type="text/css" href="css.css">

</head>

<body>
    
    <form method="post" action="crud.php"> 
        <button class="btn" type="submit" name="home">Página Inicial</button>
        <button class="btn" type="submit" name="sair">SAIR DA CONTA</button>
    </form>

</body>

</html>