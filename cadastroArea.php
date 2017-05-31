<!DOCTYPE html>
<?php include_once 'cabecalho.php'?>
            <div class="dashboard">
                 
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 200px"><img height="40px" src="icons/companyRed.png"> Cadastrar Área</p>
                    <form action = "processaCadastroArea.php" method="post">
                        <p>
                            Nome da área*:
                            <input type="text" name="nome" placeholder="Nome">
                        </p>
                        <p>
                            Nome do supervisor*:
                            <input type="text" name="supervisor" placeholder="Supervisor">
                        </p>
                        <p>
                            E-mail do supervisor:
                            <input type="text" name="email" placeholder="E-mail">
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

