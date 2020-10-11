<?php

#fechando conexao e voltando para o index
if(isset($_POST['home'])){
    header('location: loja.php');
}

if(isset($_POST['sair'])){
    header('location: index.php');
    
}
