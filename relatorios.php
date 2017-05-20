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
                <div class="relatorioTabela">
                    <center>
                        <p class="tituloLogin"><img height="40px" src="icons/relatorioRed.png"> Relatórios</p>
                        <table border="1px">
                            <thead>
                                <th>Site</th>
                                <th>Usuário</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>www.quay.com.br</td>
                                    <td>angela.amorim</td>
                                    <td>2017-05-09</td>
                                </tr>
                                <tr>
                                    <td>www.univali.br</td>
                                    <td>angela.amorim</td>
                                    <td>2017-05-09</td>
                                </tr>
                                <tr>
                                    <td>www.facebook.com</td>
                                    <td>angela.amorim</td>
                                    <td>2017-05-09</td>
                                </tr>
                                <tr>
                                    <td>www.google.com</td>
                                    <td>angela.amorim</td>
                                    <td>2017-05-09</td>
                                </tr>
                                <tr>
                                    <td>www.tumblr.com</td>
                                    <td>angela.amorim</td>
                                    <td>2017-05-09</td>
                                </tr>
                            </tbody>
                        </table><br>
                        <form>
                            <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                        </form>
                    </center>
                </div>
            </div>
        </center>   
    </body>
</html>
