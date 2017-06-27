<!DOCTYPE html>
    <?php 
        include_once './cabecalho.php';
        require_once './biblioteca.php';
    ?>
            <div class="dashboard">
                <div class="relatorioTabela">
                    <center>
                        <p class="tituloLogin"><img height="40px" src="icons/relatorioRed.png"> Relatórios</p>
                        <table border="1px">
                            <thead>
                                <th>Host</th>
                                <th>Status</th>
                                <th>Método</th>
                                <th>Site</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                    <?php lerAccessLog(ACCESSLOG); ?>
                            </tbody>
                        </table><br>
                        <form>
                            <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                            <input type="submit" formaction="relatoriosFiltro.php"  class="botao" value="Filtrar">
                        </form>
                    </center>
                </div>
            </div>
        </center>   
    </body>
</html>
