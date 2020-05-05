<!DOCTYPE html>
<html lang="pt-br" manifest="offline.appcache">
    <head>
        <title>Museu</title>
        <meta charset="utf-8"> 

        <link href="Imagens/icon.png" rel="icon">

        <!-- Bootstrap -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Manual de uso referente aos alerts customizados "swal": https://sweetalert.js.org/guides/ -->
        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
        <script src="js/sweetalert.min.js"></script>
        <link rel="stylesheet" href="css/sweetalert.css">
        
        <!-- JQUERY -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <script src="js/jquery-3.3.1.js"></script>

        <!-- Biblioteca de ícones -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   -->
        <!-- <link rel="stylesheet" href="css/font-awesome.min.css">  -->

        <!-- CSS -->
        <link rel="stylesheet" href="css/geral.css">

        <!-- JavaScript -->
        <script src="js/login.js"></script>
        <script src="js/registrar.js"></script>
        <script src="js/usuario.js"></script>
        <script src="js/edicaoObra.js"></script>
        <script src="js/funcoes.js"></script>
    </head>

    <body onload="valida_sessao()">
        <div class='container'>
            <header class='row'>
                <div class="col-12">

                    <nav id='navbar' class="navbar navbar-expand-md navbar-light bg-light shadow-sm">

                            <a class="nav_link col-2" href='index.php'><img src='Imagens/icon.png' alt='Logo do site' style='height:100px; width:100px;' data-placement="top" data-toggle="tooltip" title="Voltar a tela inicial"></a>
                      
                            <a class="navbar-brand" href="index.php" data-placement="top" data-toggle="tooltip" title="Voltar a tela inicial">
                                Home
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                               
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto text-center">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Exibição dinâmica">Apresentação das obras</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Listagem com todas as Obras">Todas as Obras do museu</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Abrir Obra aleatória do Museu">Obra aleatória</a>
                                    </li>   
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Lista dos artistas do Museu">Artistas</a>
                                    </li>                                     
                                </ul>

                                <ul class="navbar-nav ml-auto">
                                    
                                    <li class="nav-item dropdown text-center">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre data-placement="top" data-toggle="tooltip" title="Opções do autor">
                                            <span id="minhasObrasUser"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="perfil.php" data-placement="top" data-toggle="tooltip" title="Acessar suas informações">
                                                Perfil
                                            </a>
                                            <a class="dropdown-item" href="minhasObras.php" data-placement="top" data-toggle="tooltip" title="Acessar suas obras">
                                                Minhas Obras
                                            </a>

                                            <a class='dropdown-item' href='php/sair.php' data-placement='top' data-toggle='tooltip' title='Encerrar sessão'> Sair </a>                                          
                                        </div>                                       
                                    </li>
                                </ul>
                            </div>
                       
                    </nav>

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

                        <div class='form-group row'>
                            <span class='font-weight-bold'>Filtros:</span>
                        </div>    

                        <div class='form-group row mt-3'>
                            <span class=''>Obra:</span>
                            <input type="text" id='minhas_obras_filtro_login' class="form-control col-9" oninput='filtrar_usuario()'>
                        </div>  

                        <div class='form-group row mt-3'>
                            <span class=''>Descrição:</span>
                            <input  type="text" id='minhas_obras_filtro_email' class="form-control col-9" oninput='filtrar_usuario()'>
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

                function valida_sessao() 
                {
                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () 
                    {
                        if (this.readyState == 4 && this.status == 200) 
                        {
                            var resposta = this.responseText;

                            // Tirando ENTER
                            resposta = resposta.replace(/(\r\n|\n|\r)/gm, "");
                            
                            if ( resposta.length > 0 )
                            {
                                const minhaObraUser = document.getElementById('minhasObrasUser');
                                minhaObraUser.innerHTML = resposta;         
                            }
                            else
                            {
                                swal(
                                    {
                                        title: "Problemas ao validar sua sessão!",
                                        text: "Você será redirecionado para a página de login, para fazer login é preciso estar conectado à internet!",
                                        type: "error",
                                        button: "OK",
                                    }, function() 
                                    {
                                        window.open("login.php", '_self');
                                    });
                                            
                            }
                        }
                    }

                    xmlhttp.open("POST", "php/verSessao.php", true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send();
                }            
            
            </script>                

            <footer class="container">
                <div class='row col-12'>
                    <p>Museu - Footer</p>
                </div>
            </footer>
        </div>
    </body>
</html>               
