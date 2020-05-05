<?php
include('php' . DIRECTORY_SEPARATOR . 'sessao.php');
$ID = $_GET['ID'];

$acao       = '';

$codigo     = 0;
$nome       = '';
$descri     = '';
$duracao    = 0;
$repetir    = 0;
$obra       = 'Mãos a obra!';
$status     = '';
$usuario_id = 0;

if($ID > 0)
{
    $acao='ALTERAR';

    include('php'. DIRECTORY_SEPARATOR . 'conexao_bd.php');

    $query = "select * from obras where id = ?";
    $querytratada = $conn->prepare($query); 
    $querytratada->bind_param("i",$ID);
    $querytratada->execute();
    $result = $querytratada->get_result();

    $row = $result->fetch_assoc();

    $codigo  = $row["id"];
    $nome    = $row["nome"];
    $descri  = $row["descri"];
    $duracao = $row["duracao"];
    $repetir = $row["repetir"];
    $obra    = $row["obra"];
    $status  = $row["ativo"];
}
else
{
    $acao='INCLUIR';
}

?>  
                    <h1 id='titulo' class="text-center H1_titulo mt-3">Obra</h1>
                </div> 
            </header>

            <main>
                <section class='row'>

                    <div class='col-12'>

                    <div class='text-center col-12 mt-4'>
                        <h2 class=''> <?php echo $acao; ?> </h2>
                    </div>                      

                        <form>

                            <div class="form-group col-12">
                                
                                <span id='minhaObra_digitar_id' hidden><?php echo $codigo; ?></span>
                                
                                <div class='mt-3 row'>
                                    <label for="minhaObra_digitar_nome">Nome*</label>
                                    <input name='minhaObra_digitar_nome' type="text" class="form-control" id="minhaObra_digitar_nome" maxlength="150" oninput='salvarLocal()' placeholder="Nome da obra" data-placement="top" data-toggle="tooltip" title="Digite o nome da sua obra" value = "<?php echo $nome; ?>">
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="minhaObra_digitar_desc">Descrição*</label>
                                    <textarea name='minhaObra_digitar_desc' class="form-control desc_fixo" id="minhaObra_digitar_desc" rows="5" oninput='salvarLocal()' maxlength="800" placeholder = 'Descrição Obra' data-placement="top" data-toggle="tooltip" title="Digite uma descrição para sua obra"><?php echo rtrim($descri); ?></textarea>
                                </div>

                                <div class='mt-3 row'>
                                    <label for="minhaObra_digitar_duracao">Duração da obra</label>
                                    <input name='minhaObra_digitar_duracao' type="number" class="form-control" id="minhaObra_digitar_duracao" maxlength="20" oninput='salvarLocal()' placeholder="60" data-placement="top" data-toggle="tooltip" title="Máximo de 60 segundos" value="<?php echo $duracao; ?>">
                                </div>

                                <div class="form-check row mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="minhaObra_digitar_loop" name="minhaObra_digitar_loop" onchange="salvarLocal()" data-placement="top" data-toggle="tooltip" title="Exibir a apresentação repetidamente">
                                    <label class="form-check-label" for="minhaObra_digitar_loop" data-placement="top" data-toggle="tooltip" title="Exibir a apresentação repetidamente"> Exibir em loop </label>
                                </div>        
                                
                                <div class='form-group row mt-3'>
                                    <label for="minhaObra_digitar_status">Status:</label>
                                    <select id='minhaObra_digitar_status' name="minhaObra_digitar_status"class="form-control ativo_select" onchange="salvarLocal()" data-placement="top" data-toggle="tooltip" title="Se estiver inativo, Não será exibido para os leitores">
                                        <option value="ativo" selected>Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>

                                <div class="row mt-5">
                                    <h3>Crie sua obra!</h3>
                                </div>
                                
                                <div class="row mt-1">
                                    <span>Você está trabalhando offline, sua obra está salva na sessão atual. Para salvar no servidor, clique em Gravar.</span>
                                </div>                                 

                                <div class='mt-5 row d-flex justify-content-center'>
                                    <a type="button" class="btn btn-outline-dark fa fa-bold          fa-2x"      data-placement="top" data-toggle="tooltip" title="Negrito"          onclick="execCommand('bold',false,'');"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-italic        fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Itálico"          onclick="execCommand('italic',false,'');"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-underline     fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Sublinhado"       onclick="execCommand('underline',false,'');"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-strikethrough fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Tachado"          onclick="execCommand('strikeThrough',false,'');"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-tint          fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Aplicar Cor"      onclick="pegarCor()"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-align-center  fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Centralizar"      onclick="execCommand('justifyCenter',false,'');"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-align-left    fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Alinhar esquerda" onclick="execCommand('justifyLeft',false,'');"></a>
                                    <a type="button" class="btn btn-outline-dark fa fa-align-right   fa-2x ml-3" data-placement="top" data-toggle="tooltip" title="Alinhar direita"  onclick="execCommand('justifyRight',false,'');"></a>
                                    <input type="color" name="minhaObra_digitar_cor" id="minhaObra_digitar_cor" onchange="trocarCor()" hidden >
                                </div>

                                <div class="mt-3">
                                    <div class="border border-secondary" id="minhaObra_digitar_obra" contenteditable oninput='salvarLocal()'>
                                        <?php echo rtrim($obra); ?>
                                    </div>
                                </div>                          
                            </div>
                            
                            <div class="form-group row obra d-flex justify-content-center">
                                <input type="button" class="btn btn-dark btn-lg ml-3"      Value='Gravar'   onclick="salvar()"   data-placement="top" data-toggle="tooltip" title="Salvar informações">
                                <input type="button" class="btn btn-secondary btn-lg ml-3" Value='Cancelar' onclick="cancelar()" data-placement="top" data-toggle="tooltip" title="As informações não serão salvas!">
                            </div>
                        </form>
                    </div>
                </section>
            </main>

            <script>
                document.getElementById("minhaObra_digitar_obra").addEventListener("input", function() 
                {
                    salvarLocal();
                }, false);

                carregarDadosSession();

                window.onbeforeunload = function (e) 
                {
                   // limparDadosSessao();
                    // var message = "Your confirmation message goes here.",
                    // e = e || window.event;
                    // // For IE and Firefox
                    // if (e) {
                    // e.returnValue = message;
                    // }

                    // // For Safari
                    // return message;
                };
            </script>               

        <?php
            include('footer.php');
        ?>
        </div>
    </body>
</html>