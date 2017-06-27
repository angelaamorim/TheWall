<!DOCTYPE html>
<?php include_once 'cabecalho.php'?>
            <div class="dashboard">
                 
                <div class="cadastroSimples">
                    <div class="centro">
                        <p class="tituloLogin" style="padding-left: 200px"><img height="40px" src="icons/userRed.png"> Cadastrar Usuário</p>
                    <form action = "processaCadastroUsuario.php" method="post" enctype="multipart/form-data">
                        <p>
                            Nome*:
                            <input type="text" name="nome" placeholder="Nome">
                     
                            Sobrenome*:
                            <input type="text" name="sobrenome" placeholder="Sobrenome">
                        </p>
                        <p>
                            E-mail:
                            <input type="text" name="email" placeholder="E-mail">
                  
                        </p>
                        <p>
                            Cargo*:
                            <input type="text" name="cargo" placeholder="Cargo">
                    
                        
                            Área*: 
                            <select name="area">
                                <option>Selecione uma área</option>
                                <option>RH</option>
                                <option>Desenvolvimento</option>
                            </select>
                        </p>
                        <p>
                            Horários de Intervalo:
                            <input type="submit" formaction="cadastroHorario.php"  class="botao" value="Novo horário">
                        </p>
                        <p>
                            <input type="checkbox" name="intervalo" value="07:00 - 08:00">07:00 - 08:00<br>
                            <input type="checkbox" name="intervalo" value="12:00 - 13:30">12:00 - 13:30<br>
                            <input type="checkbox" name="intervalo" value="18:00 - 19:00">18:00 - 19:00<br>
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
