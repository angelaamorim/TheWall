<?php
    if($_POST){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            echo "<h3 class='ok'>Cadastro efetuado com sucesso...</h3>";
            include_once 'login.php';
    }                 

?>