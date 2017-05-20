<?php
    if($_POST){
            $horario = $_POST['horario'];
            $descricao = $_POST['descricao'];
            echo "<h3 class='ok'>Cadastro efetuado com sucesso...</h3>";
            include_once 'cadastroHorario.php';
    }                    
?>
