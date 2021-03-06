<?php
    include('php' . DIRECTORY_SEPARATOR . 'sessao.php');
    include('cabec.php');

    // //read the entire string
    // $str=file_get_contents('offline.appcache');

    // //replace something in the file string - this is a VERY simple example
    // $str=str_replace('[up]', 'up-[up]',$str);

    // //write the entire string
    // file_put_contents('offline.appcache', $str);  
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
                        <button type="submit" class="btn btn-success btn-lg botao_incluir" data-placement="top" data-toggle="tooltip" title="Adicionar nova obra"> Incluir</button>
                    </form>
                    
                    <!-- Filtros -->
                    <div class='col-12'>

                        <div class='form-group row col-6'>
                            <span class='font-weight-bold'>Filtros:</span>
                        </div>    

                        <div class='form-group row mt-3 col-8'>
                            <input type="text" id='minhas_obras_filtro_nome' class="form-control col-9" oninput='filtrarMinhasObras()' placeholder="Digite uma obra...">
                        </div>  

                        <div class='form-group row mt-3 col-10'>
                            <input  type="text" id='minhas_obras_filtro_desc' class="form-control col-9" oninput='filtrarMinhasObras()' placeholder="Digite uma descrição de uma obra...">
                        </div>                                                

                        <div class='form-group row mt-3 col-7'>
                            <span>Status:</span>

                            <select id='minhas_obras_filtro_status' class='form-control ativo_select' onchange='filtrarMinhasObras()'>
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

                sessionStorage.setItem("reload", 'ok' );
            </script>                

            <?php
                include('footer.php');
            ?>
        </div>
    </body>
</html>               
