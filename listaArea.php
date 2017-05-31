<?php 
    include_once 'cabecalho.php';
    require_once './biblioteca.php';
?>
<div class="dashboard">
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 100px"><img height="40px" src="icons/userRed.png"> Visualizar Usuários Cadastrados</p>
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
                                
                </div>
            </div>
          </div>
        </center>   
    </body>
</html>