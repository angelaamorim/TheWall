<?php include_once './cabecalho.php'?>
            <div class="dashboard">
                <div class="conteudo">
                    <img height="40px" src="icons/clockRed.png"> <h2 class="tituloLogin" style="display: inline">Horários </h2><br><br>
                    <div class="divItem" style="width: 100px; height: 50px;">
                        <p>
                            <a href="listaHorario.php" class="linkSubMenu" style="padding:10px;">Cadastrados</a>
                        </p>
                    </div>
                    <div class="divItem" style="width: 100px; height: 50px;"  >
                        <p>
                            <a href="cadastroHorario.php" class="linkSubMenu" style="padding:10px;">Cadastrar</a>
                        </p>
                    </div>
                    <div class="divItem" style="width: 100px; height: 50px;">
                        <p>
                            <a href="alteraHorario.php" class="linkSubMenu" style="padding:10px;">Alterar</a>
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