<?php include_once './cabecalho.php'?>
            <div class="dashboard">
                <div class="conteudo">
                    <img height="40px" src="icons/companyRed.png"><h2 class="tituloLogin" style="display: inline">Áreas </h2><br>
                    <div class="divItem" style="width: 100px; height: 50px;">
                        <p>
                            <a href="listaArea.php" class="linkSubMenu" style="padding:10px;">Cadastradas</a>
                        </p>
                    </div>
                    <div class="divItem" style="width: 100px; height: 50px;"  >
                        <p>
                            <a href="cadastroArea.php" class="linkSubMenu" style="padding:10px;">Cadastrar</a>
                        </p>
                    </div>
                    <div class="divItem" style="width: 100px; height: 50px;">
                        <p>
                            <a href="alteraArea.php" class="linkSubMenu" style="padding:10px;">Alterar</a>
                        </p>
                    </div>
                    <form>
                        <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                    </form>
                </div>
            </div>
        </center>   
    </body>
</html>
