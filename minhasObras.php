<?php
    include('php/sessao.php');
    include('cabec.php');
?>           
                    <h1 class="text-center mt-5">Suas Obras</h1>
                </div> 
            </header>

                <main>
                    <section class='row'>

                        <div class='text-center col-12'>
                            <h2> Consulta e edição das obras </h2>
                        </div>                            

                    <form action='minhaObra_digitar.php?ID=0' method='POST' class='form-group row mt-3 col-12 d-flex justify-content-center'>
                        <button type="submit" class="btn btn-success btn-lg fa fa-pencil-square-o botao_incluir" data-placement="top" data-toggle="tooltip" title="Adicionar nova obra"> Incluir</button>
                    </form>
                    
                    <!-- Filtros -->
                    <div class='col-12'>

                        <div class='form-group row'>
                            <span class='font-weight-bold'>Filtros:</span>
                        </div>    

                        <div class='form-group row mt-3'>
                            <span class=''>Obra:</span>
                            <input style="margin-left: 16px;" type="text" id='minhas_obras_filtro_login' class="form-control col-9" oninput='filtrar_usuario()'>
                        </div>  

                        <div class='form-group row mt-3'>
                            <span class=''>Descrição:</span>
                            <input style="margin-left: 10px;"  type="text" id='minhas_obras_filtro_email' class="form-control col-9" oninput='filtrar_usuario()'>
                        </div>                                                

                        <div class='form-group row mt-3'>
                            <span>Status:</span>

                            <select id='minhas_obras_filtro_status' class='form-control ativo_select' onchange='filtrar_usuario()'>
                                <option value="Todos">Todos</option>
                                <option value="Ativos">Ativos</option>
                                <option value="Inativos">Inativos</option>
                            </select>
                        </div> 
                            
                    </div>                                                                                           

                    <div id='table_consulta_minhas_obras' class='container mt-4'> </div>
                        
                    </section>
                </main>

            <script>
                const parametros = '';
                // Ajax com Jquery e está refazendo apenas a tabela 
                $.post('php/consulta_minhas_obras.php',parametros, function(data)
                    {
                        $('#table_consulta_minhas_obras').html(data);
                    }
                )
            </script>                

            <?php 
                include('footer.php'); 
            ?>
        </div>
    </body>
</html>               
