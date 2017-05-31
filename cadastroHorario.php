<!DOCTYPE html>
<?php include_once 'cabecalho.php'?>
            <div class="dashboard">
                 
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 200px"><img height="40px" src="icons/clockRed.png"> Cadastrar Horário</p>
                    <form action = "processaCadastroHorario.php" method="post">
                        <p>
                            Horário de intervalo*:
                            <input type="time" name="horario">
                        </p>
                        <p>
                            Descrição do intervalo*:
                            <input type="text" name="descricao" placeholder="Descrição do Intervalo">
                        </p>
                        <p>* campos obrigatórios</p>
                        <input type="submit" class="botao" style="margin-left: 200px" value="Cadastrar">
                        <input type="submit" formaction="home.php"  class="botao" value="Voltar">
                    </form>
                </div>
            </div>
          </div>
        </center>   
    </body>
</html>
