<!DOCTYPE html>
    <?php 
        include_once './cabecalho.php';
        require_once './biblioteca.php';
    ?>
            <div class="dashboard">
                <div class="relatorioTabela">
                    <center>
                        <form action="processaAlteraBlacklist.php" method="post">
                            <p class="tituloLogin"><img height="40px" src="icons/relatorioRed.png"> Alterar Blacklist </p>
                            <h3 style="padding-left: 100px;">Coloque o site que deseja bloquear e pressione enter.</h3>
                            <textarea name="blacklist"><?php lerBlacklistAltera(BLACKLIST);?></textarea><br>
                            <input type="submit" class="botao" value="Salvar">
                            <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                        </form>
                    </center>
                </div>
            </div>
        </center>   
    </body>
</html>