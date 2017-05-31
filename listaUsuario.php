<?php 
    include_once 'cabecalho.php';
    require_once './biblioteca.php';
?>
<div class="dashboard">
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 100px"><img height="40px" src="icons/userRed.png"> Visualizar Usuários Cadastrados</p>
                        <?php 
                            $usuarios = ler(USUARIO);
                            if(count($usuarios) > 0){
                        ?>
                        <table border="1px">
                                <thead>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>E-mail</th>
                                    <th>Cargo</th>
                                    <th>Area</th>
                                    <th>Intervalos</th>
                                </thead>
                                <tbody>
                        <?php
                                foreach($usuarios as $usuario){
                        ?>
                                <tr>
                                    <td><?php echo $usuario['nome']; ?></td>
                                    <td><?php echo $usuario['sobrenome']; ?></td>
                                    <td><?php echo $usuario['email']; ?></td>
                                    <td><?php echo $usuario['cargo']; ?></td>
                                    <td><?php echo $usuario['area']; ?></td>
                                    <td><?php echo $usuario['intervalo']; ?></td>
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
