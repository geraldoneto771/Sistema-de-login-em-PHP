<?php session_start(); unset($_SESSION['loginOK']); ?>

<?php



# testa se existe sessão loginErro
if (isset($_SESSION['loginErro'])) : ?>
<div class="msg">
        <?php
    # recupera e mostra o valor da sessão loginErro 
    echo $_SESSION['loginErro'] . '<br><br>';
    # apaga a sessão loginErro 
    unset($_SESSION['loginErro']);
    ?>
    </div>
    <?php endif ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
    <form method="POST" action="valida.php">
    
    
        
        <div class="input-group">
        
        <input type="text" name="login" placeholder="Email ou telefone" required autofocus><br><br>
        </div>
        <div class="input-group">
        
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        </div>
        <div class="input-group">
        <button  class="btn" type="submit">Entrar</button>
        </div>
        <p class="esqueceu_senha">Esqueceu a senha?<p>
            <br>
        <div class="input-group">
        <button  class="btn2" type="submit" >Criar nova conta</button>
        </div>
    </form>
</body>

</html>