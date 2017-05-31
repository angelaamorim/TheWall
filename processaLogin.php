<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './biblioteca.php';
            if($_POST){
                if(isset($_POST['usuario']) && isset($_POST['senha'])){
                    $login = $_POST['usuario'];
                    $senha = $_POST['senha'];
                    $usuarios = ler(USUARIOSIMPLES);
                    foreach($usuarios as $usuario){
                        if ($usuario['nome'] == $login && $usuario['senha'] == $senha){
                            @session_start();
                            $_SESSION['usuario'] = $login;
                            echo "<h3 class='ok'>Login efetuado com sucesso...</h3>";
                            include_once 'home.php';
                        }
                    }
                }
            }   
            else{
                echo "cai fora mané";
            }
        ?>
    </body>
</html>
