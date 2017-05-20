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
            if($_POST){
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                if($usuario == "admin" && $senha == "admin"){
                    @session_start();
                    $_SESSION['usuario'] = $usuario;
                    echo "<h3 class='ok'>Login efetuado com sucesso...</h3>";
                    include_once 'home.php';
                    
                }
            }   
            else{
                echo "cai fora mané";
            }
        ?>
    </body>
</html>
