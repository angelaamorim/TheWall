<?php include_once './cabecalho.php'?>
            <div class="dashboard">
                <div class="conteudo">
                    <h2 class="tituloLogin" style="display: inline">Seja bem-vindo ao </h2><h1 style="color:#CD3333">The Wall! :)</h1><br>
                    <div class="divItem">
                        <img height="40px" src="icons/userRed.png"> Usuários
                        <p>
                            <a href="listaUsuario.php" class="linkSubMenu">Cadastrados</a>
                            <a href="cadastroUsuario.php" class="linkSubMenu">Cadastrar</a>
                            <a href="alteraUsuario.php" class="linkSubMenu">Alterar</a>
                        </p>
                    </div>
                    <div class="divItem">
                        <img height="40px" src="icons/companyRed.png"> Áreas
                        <p>
                            <a href="listaArea.php" class="linkSubMenu">Cadastradas</a>
                            <a href="cadastroArea.php" class="linkSubMenu">Cadastrar</a>
                            <a href="alteraArea.php" class="linkSubMenu">Alterar</a>
                        </p>
                    </div>
                    <div class="divItem">
                        <img height="40px" src="icons/clockRed.png"> Horários
                        <p>
                            <a href="listaHorario.php" class="linkSubMenu">Cadastrados</a>
                            <a href="cadastroArea.php" class="linkSubMenu">Cadastrar</a>
                            <a href="alteraArea.php" class="linkSubMenu">Alterar</a>
                        </p>
                    </div>
                    <div class="divItem">
                        <img height="40px" src="icons/relatorioRed.png"> Relatórios de Acesso
                        <p>
                            <a href="relatorios.php" class="linkSubMenu">Visualizar</a>
                            <a href="relatoriosFiltro.php" class="linkSubMenu">Filtrar</a>
                            <a href="manutencao.php" class="linkSubMenu">Exportar</a>
                        </p>
                    </div>
                    <div class="divItem">
                        <img height="40px" src="icons/relatorioRed.png"> White List (por área)
                        <p>
                            <a href="listaWhitelist.php" class="linkSubMenu">Visualizar</a>
                            <a href="alteraWhitelist.php" class="linkSubMenu">Alterar</a>
                            <a href="manutencao.php" class="linkSubMenu">Exportar</a>
                        </p>
                    </div>  
                    <div class="divItem">
                        <img height="40px" src="icons/relatorioRed.png"> Black List (por área)
                        <p>
                            <a href="listaBlacklist.php" class="linkSubMenu">Visualizar</a>
                            <a href="alteraBlacklist.php" class="linkSubMenu">Alterar</a>
                            <a href="manutencao.php" class="linkSubMenu">Exportar</a>
                        </p>
                    </div>
                </div>
            </div>
        </center>   
    </body>
</html>