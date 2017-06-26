<?php 
    include_once 'cabecalho.php';
    require_once './biblioteca.php';
?>
<div class="dashboard">
                <div class="cadastroSimples">
                    <div class="centro" style="margin-left: 100px">
                        <p class="tituloLogin" ><img height="40px" src="icons/userRed.png"> Visualizar Áreas Cadastradas</p>
                        <?php 
                            $areas = ler(AREA);
                            if(count($areas) > 0){
                        ?>
                        <table border="1px">
                                <thead>
                                    <th>Nome</th>
                                    <th>Supervisor</th>
                                    <th>E-mail Supervisor</th>
                                </thead>
                                <tbody>
                        <?php
                                foreach($areas as $area){
                        ?>
                                <tr>
                                    <td><?php echo $area['nome']; ?></td>
                                    <td><?php echo $area['supervisor']; ?></td>
                                    <td><?php echo $area['email']; ?></td>
                                </tr>
                        <?php
                                }
                        ?>
                                </tbody>
                        </table>
                        <?php
                            }
                        ?>
                        <br>
                        <form>
                           <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                           <input type="submit" formaction="cadastroArea.php"  class="botao" value="Cadastrar Nova">
                           <input type="submit" formaction="manutencao.php"  class="botao" value="Alterar">
                        </form>
                </div>
            </div>
          </div>
        </center>   
    </body>
</html>