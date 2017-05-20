<?php
    require_once './biblioteca.php';
    if($_POST){
        if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cargo']) && isset($_POST['area']) && isset($_POST['intervalo'])){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $cargo = $_POST['cargo'];
            $area = $_POST['area'];
            $intervalo = $_POST['intervalo'];
            if(isset($_POST['email'])){
                $email = $_POST['email'];
            }
            else{
                $email = '';
            }
            $novoUsuario = criarUsuario($nome, $sobrenome, $email, $cargo, $area, $intervalo);
            salvar($novoUsuario, USUARIO);
            echo "<h3 class='ok'>Cadastro efetuado com sucesso...</h3>";
            include_once 'cadastroUsuario.php';
        }
    }                    

?>

