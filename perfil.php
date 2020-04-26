<?php
    include('php/sessao.php');
    include('cabec.php');
?>           
                    <h1 class="text-center mt-5">Seu Perfil</h1>
                </div> 
            </header>

                <main>
                    <section class='row'>

                        <div class='form-group col-12'>
                            <div>
                                <h2> Informações de cadastro </h2>
                            </div>
                            
                            <input type="text" id="perfil_login" class="form-control mt-3" placeholder="Usuário" maxlength="20" data-placement="top" data-toggle="tooltip" title="Digite o nome do usuário">  
                            <input type="email" id="perfil_email" class="form-control mt-3" placeholder="nome@server.com.br" maxlength="200" data-placement="top" data-toggle="tooltip" title="Digite seu e-mail">

                            <div class="d-flex justify-content-center">
                                <a class='btn btn-secondary mt-3' data-toggle="modal" data-target="#myModal" data-placement="top" data-type="tooltip" title="Trocar senha">Trocar senha</a>
                                <input type="button" value="Salvar alterações" onclick="atualizarCadastro()" class="btn btn-dark mt-3 ml-3" data-placement="top" data-toggle="tooltip" title="Atualizar Cadastro" ></input>
                                <input type="button" value="Desativar cadastro" onclick="desativarUsuario()" class="btn btn-secondary mt-3 ml-3" data-placement="top" data-toggle="tooltip" title="Para ativar novamente, basta fazer login novamente." ></input>
                            </div>
                        </div>

                        <!-- Modal - Resetar Senha -->
                        <div id="myModal" class="modal fade" role="dialog">

                            <div class="modal-dialog">

                                <div class="modal-content">
                                    
                                    <div class="modal-header d-flex justify-content-center">
                                        <span class="modal-title font-weight-bold">Siga os passos abaixo para redefinir sua senha:</span>
                                    </div>

                                    <div class="modal-body form-group">
                                        <div class="col-12">
                                            <span >1 - Digite a senha atual:</span>
                                            <input type="password" id='perfilSenhaAtual' class='form-control' placeholder="Senha atual" data-placement="top" data-toggle="tooltip" title="Senha atual" >  
                                        </div>

                                        <div class="col-12 mt-3">
                                            <span>2 - Digite a nova senha:</span>
                                            <input type="password" id='perfilSenhaNova' class='form-control' maxlength="20" placeholder="Nova Senha" data-placement="top" data-toggle="tooltip" title="Nova Senha" >
                                        </div>

                                        <div class="col-12 mt-3">
                                            <span>3 - Confirme a nova senha:</span>
                                            <input type="password" id='perfilSenhaConfirmar' class='form-control' maxlength="20" placeholder="Confirmar Senha" data-placement="top" data-toggle="tooltip" title="Confirmar Senha" >
                                            <small class="form-text font-weight-bold" >Senha deve ter no mínimo 6 caracteres</small> 
                                        </div>

                                        <div class="col-12 mt-3">
                                            <span>4 - Gravar nova senha</span>
                                            <input type="button" value="Gravar" class="btn btn-warning form-control" onclick="trocarSenha()" data-placement="top" data-toggle="tooltip" title="Trocar senha">
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-placement="top" data-toggle="tooltip" title="Cancelar procedimento de troca de senha">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                        
                    </section>
                </main>

            <?php 
                include('footer.php'); 
            ?>
        </div>
    </body>
</html>               
