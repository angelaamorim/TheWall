<!DOCTYPE html>
    <?php 
        include_once './cabecalho.php';
        require_once './biblioteca.php';
    ?>
            <div class="dashboard">
                <div class="relatorioTabela">
                    <center>
                        <p class="tituloLogin"><img height="40px" src="icons/relatorioRed.png"> Whitelist </p>
                        <table border="1px">
                                <thead>
                                    <th>Site</th>
                                </thead>
                                <tbody>
                                    <?php 
                                        lerWhitelist(WHITELIST);
                                    ?>
                                </tbody>
                        </table>
                        <form>
                            <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                            <input type="submit" formaction="alteraWhitelist.php"  class="botao" value="Alterar">
                        </form>
                    </center>
                </div>
            </div>
        </center>   
    </body>
</html>