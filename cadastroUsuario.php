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
                        <p class="tituloLogin" style="padding-left: 200px"><img height="40px" src="icons/userRed.png"> Cadastrar Usuário</p>
                    <form action = "processaCadastroUsuario.php" method="post" enctype="multipart/form-data">
                        <p>
                            Nome*:
                            <input type="text" name="nome" placeholder="Nome">
                     
                            Sobrenome*:
                            <input type="text" name="sobrenome" placeholder="Sobrenome">
                        </p>
                        <p>
                            E-mail:
                            <input type="text" name="email" placeholder="email">
                  
                            Foto: <input type="file" name="foto">
                        </p>
                        <p>
                            Cargo*:
                            <input type="text" name="cargo" placeholder="Cargo">
                    
                        
                            Área*: 
                            <select name="area">
                                <option>Selecione uma área</option>
                                <option>RH</option>
                                <option>Desenvolvimento</option>
                            </select>
                        </p>
                        <p>
                            Horários de Intervalo:
                            <input type="submit" formaction="cadastrarHorario.php"  class="botao" value="Novo horário">
                        </p>
                        <p>
                            <input type="checkbox" name="intervalo" value="07:00 - 08:00">07:00 - 08:00<br>
                            <input type="checkbox" name="intervalo" value="12:00 - 13:30">12:00 - 13:30<br>
                            <input type="checkbox" name="intervalo" value="18:00 - 19:00">18:00 - 19:00<br>
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
