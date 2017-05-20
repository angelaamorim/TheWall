<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Wall - Firewall Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        
        <div class="cabecalho">
            <h1>The Wall </h1> <h2 class="subtitulo"> - Firewall Manager</h2>
            <?php
               @session_start();
                if(isset($_SESSION['usuario'])){
                    
            ?>
            <div class="usuarioLogado">
                <p>Bem-vindo <?php echo $_SESSION['usuario'] ?> <a href="sair.php" class="itemMenu">Sair</a></p>
            </div>
            <?php
                 }
            ?>
        </div>
        <center>
            <div class="menu">
                <img height="25px"src="icons/home.png"><a href="home.php" class="itemMenu"> Home </a> |
                <img height="25px"src="icons/user.png"><a href="cadastroUsuario.php" class="itemMenu"> Cadastro de Usuário </a> |
                <img height="25px"src="icons/company.png"><a href="cadastroArea.php" class="itemMenu">Cadastro de Área </a> |
                <img height="25px"src="icons/clock.png"><a href="cadastroHorario.php" class="itemMenu">Cadastro de Horários </a> |
                <img height="25px"src="icons/relatorio.png"><a href="relatorios.php" class="itemMenu">Relatórios</a>
            </div>
            <div class="dashboard">
                 
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 200px"><img height="40px" src="icons/companyRed.png"> Cadastrar Área</p>
                    <form action = "processaCadastroArea.php" method="post">
                        <p>
                            Nome da área*:
                            <input type="text" name="nome" placeholder="Nome">
                        </p>
                        <p>
                            Nome do supervisor*:
                            <input type="text" name="supervisor" placeholder="Supervisor">
                        </p>
                        <p>
                            E-mail do supervisor:
                            <input type="text" name="email" placeholder="E-mail">
                        </p>
                        <p>* campos obrigatórios</p>
                        <input type="submit" class="botao" style="margin-left: 200px" value="Cadastrar">
                        <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                    </form>
                </div>
            </div>
          </div>
        </center>   
    </body>
</html>

