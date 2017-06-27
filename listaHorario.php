<?php 
    include_once 'cabecalho.php';
    require_once './biblioteca.php';
?>
<div class="dashboard">
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 100px"><img height="40px" src="icons/clockRed.png"> Visualizar Horários de Intervalo Cadastrados</p>
                        <?php 
                            $horarios = ler(HORARIO);
                            if(count($horarios) > 0){
                        ?>
                        <table border="1px" style="margin-left:300px;">
                                <thead>
                                    <th>Descrição</th>
                                    <th>Horário</th>
                                </thead>
                                <tbody>
                        <?php
                                foreach($horarios as $horario){
                        ?>
                                <tr>
                                    <td><?php echo $horario['descricao']; ?></td>
                                    <td><?php echo $horario['horario']; ?></td>
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
                           <input type="submit" formaction="home.php"  class="botao" value="Voltar" style="margin-left: 250px">
                           <input type="submit" formaction="cadastroHorario.php"  class="botao" value="Cadastrar Novo" >
                        </form>          
                </div>
            </div>
          </div>
        </center>   
    </body>
</html>