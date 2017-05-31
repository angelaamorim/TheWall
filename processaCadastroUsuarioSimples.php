<?php
    require_once './biblioteca.php';
    if($_POST){
        if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['senha'])){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $novoUsuarioSimples = criarUsuarioSimples($nome, $sobrenome, $email, $senha);
            salvar($novoUsuarioSimples, USUARIOSIMPLES);
            echo "<h3 class='ok'>Cadastro efetuado com sucesso...</h3>";
            include_once 'index.html';
        }
    }                    
             

?>