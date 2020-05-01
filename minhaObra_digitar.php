<?php
include('php' . DIRECTORY_SEPARATOR . 'sessao.php');
$ID = $_GET['ID'];

$acao       = '';

$codigo     = 0;
$nome       = '';
$descri     = '';
$duracao    = 0;
$repetir    = 0;
$obra       = '';
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

//echo $ID;
?>  

<?php
    include('cabec.php');
?>
                    <h1 id='titulo' class="text-center H1_titulo mt-3">Obra</h1>
                </div> 
            </header>

            <main>
                <section class='row'>

                    <div class='col-12'>

                    <div class='text-center col-12 mt-4'>
                        <h2 class='H2_titulo'> <?php echo $acao; ?> </h2>
                    </div>                      

                        <form>

                            <div class="form-group col-12">                               
                                
                                <div class='mt-3 row'>
                                    <label for="minhaObra_digitar_nome">Nome*</label>
                                    <input name='minhaObra_digitar_nome' type="text" class="form-control" id="minhaObra_digitar_nome" maxlength="150" placeholder="Nome da obra" data-placement="top" data-toggle="tooltip" title="Digite o nome da sua obra" value = "<?php echo $nome; ?>">
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="minhaObra_digitar_desc">Descrição*</label>
                                    <textarea name='minhaObra_digitar_desc' class="form-control desc_fixo" id="minhaObra_digitar_desc" rows="5" maxlength="800" placeholder = 'Descrição Obra' data-placement="top" data-toggle="tooltip" title="Digite uma descrição para sua obra"><?php echo rtrim($descri); ?></textarea>
                                </div>

                                <div class='mt-3 row'>
                                    <label for="minhaObra_digitar_nome">Duração da obra</label>
                                    <input name='minhaObra_digitar_nome' type="number" class="form-control" id="minhaObra_digitar_nome" maxlength="20" placeholder="60" data-placement="top" data-toggle="tooltip" title="Máximo de 60 segundos" value="<?php echo $duracao; ?>">
                                </div>

                                <div class="form-check row mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="minhaObra_digitar_loop" name="minhaObra_digitar_loop" data-placement="top" data-toggle="tooltip" title="Exibir a apresentação repetidamente">
                                    <label class="form-check-label" for="minhaObra_digitar_loop" data-placement="top" data-toggle="tooltip" title="Exibir a apresentação repetidamente"> Exibir em loop </label>
                                </div>              
                                
                                <div class='form-group row mt-3'>
                                    <label for="minhaObra_digitar_status">Status:</label>
                                    <select id='minhaObra_digitar_status' name="minhaObra_digitar_status"class="form-control ativo_select" data-placement="top" data-toggle="tooltip" title="Se estiver inativo, Não será exibido para os leitores">
                                        <option value="Ativos">Ativo</option>
                                        <option value="Inativos">Inativo</option>
                                    </select>
                                </div>
                                
                                <div class="form-group row mt-5">
                                    <label>Monte sua Obra!</label>

                                    <div contenteditable="true" class="form-control desc_fixo" id="produtos_digitar_descri" maxlength="2000" placeholder='Obra' name='produtos_digitar_descri'>
                                        <?php echo rtrim($obra); ?>
                                    </div>
                                </div>

                                <div class='mt-3 row'>
                                    <input type="button" class="btn btn-primary" value="Negrito" onclick="execCommand('bold',false,'');">
                                    <input type="button" class="btn btn-primary ml-3" value="Ítalico" onclick="execCommand('italic',false,'');">
                                    <input type="button" class="btn btn-primary ml-3" value="Sublinhado" onclick="execCommand('underline',false,'');">
                                </div>                                
                            </div>
                            
                            <div>
                                <input id='cmd_gravar' type="button" name="cmd_gravar" class="btn btn-primary btn-lg botoes_cadastro" Value='Salvar Local' data-placement="top" data-toggle="tooltip" title="Salvar informações">     

                                <input id='cmd_gravar' type="button" name="cmd_gravar" class="btn btn-primary btn-lg botoes_cadastro ml-3" Value='Gravar' data-placement="top" data-toggle="tooltip" title="Salvar informações">

                                <input id='cmd_voltar' type="button" name="cmd_voltar" class="btn btn-warning btn-lg botoes_cadastro ml-3" Value = 'Cancelar' data-placement="top" data-toggle="tooltip" title="As informações não serão salvas!">
                            </div>
                        </form>
                    </div>
                </section>
            </main>

            <script>

                // Adiciona evento de click nos botões
                $('#cmd_gravar').click(function()
                {
                    novo_cadastro('cadastro');
                })    

                $('#cmd_voltar').click(function()
                {
                    window.open("Usuarios.php", '_self');
                })

            </script>               

        <?php
            include('footer.php');
        ?>
        </div>
    </body>
</html>