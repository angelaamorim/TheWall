<?php
    require_once './biblioteca.php';
    if($_POST){
        if(isset($_POST['horario']) && isset($_POST['descricao'])){
            $horario = $_POST['horario'];
            $descricao = $_POST['descricao'];
            $novoHorario = criarHorario($horario, $descricao);
            salvar($novoHorario, HORARIO);
            echo "<h3 class='ok'>Cadastro efetuado com sucesso...</h3>";
            include_once 'cadastroHorario.php';
        }
    }        
?>
