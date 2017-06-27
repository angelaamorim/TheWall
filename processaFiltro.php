<!DOCTYPE html>
    <?php 
        include_once './cabecalho.php';
        require_once './biblioteca.php';
    ?>
            <div class="dashboard">
                <div class="relatorioTabela">
                    <center>
                        <p class="tituloLogin"><img height="40px" src="icons/relatorioRed.png"> Relatórios</p>
                        <form action="processaFiltro.php" method="post">
                            <h3 style="color:black;font-family: arial;font-size: 16px">Filtrar por data: <input type="date" name="data"> <input type="submit" class="botao" value="Filtrar"></h3>
                        </form>
                        <table border="1px">
                            <thead>
                                <th>Host</th>
                                <th>Status</th>
                                <th>Método</th>
                                <th>Site</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                    <?php 
                                            lerAccessLogFiltro(ACCESSLOG,$_POST['data']); 
                                    ?>
                            </tbody>
                        </table>
                        <form>
                            <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                        </form>
                    </center>
                </div>
            </div>
        </center>   
    </body>
</html>