<?php
    require_once './biblioteca.php';
    if($_POST){
        if(isset($_POST['nome']) && isset($_POST['supervisor'])){
            $nome = $_POST['nome'];
            $supervisor = $_POST['supervisor'];
            if(isset($_POST['email'])){
                $email = $_POST['email'];
            }
            else{
                $email = '';
            }
            $novaArea = criarArea($nome, $supervisor, $email);
            salvar($novaArea, AREA);
            echo "<h3 class='ok'>Cadastro efetuado com sucesso...</h3>";
            include_once 'cadastroArea.php';
        }
    }                            
?>
