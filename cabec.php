<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Museu</title>
        <meta charset="utf-8"> 

        <link href="Imagens/icon.png" rel="icon">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Manual de uso referente aos alerts customizados "swal": https://sweetalert.js.org/guides/ -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <!-- Biblioteca de ícones -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

        <!-- CSS -->
        <link rel="stylesheet" href="css/geral.css">

        <!-- JavaScript -->
        <script src="js/login.js"></script>
        <script src="js/funcoes.js"></script>
    </head>

    <body>
        <div class='container'>
            <header class='row'>
                <div class="col-12">

                    <nav id='navbar' class="navbar navbar-expand-md navbar-light bg-light shadow-sm">

                            <a class="nav_link col-2" href='Index.php'><img src='Imagens/icon.png' alt='Logo do site' style='height:100px; width:100px;' data-placement="top" data-toggle="tooltip" title="Voltar a tela inicial"></a>
                      
                            <a class="navbar-brand" href="Index.php" data-placement="top" data-toggle="tooltip" title="Voltar a tela inicial">
                                Home
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                               
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Exibição dinâmica (1 min por obra)">Apresentação das obras</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Listagem com todas as Obras">Todas as Obras do museu</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-placement="top" data-toggle="tooltip" title="Abrir Obra aleatória do Museu">Obra aleatória</a>
                                    </li>                                    
                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    <!-- Exemplo de 1 item, sem subOpção
                                    <li class="nav-item">
                                            <a class="nav-link" href="#">Home</a>
                                    </li>-->
                                    
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre data-placement="top" data-toggle="tooltip" title="Opções do autor">
                                            Usuário X ou Convidado(Sem sessão)
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#" onclick="">
                                                Perfil
                                            </a>
                                            <a class="dropdown-item" href="#" onclick="">
                                                Minhas Obras
                                            </a>                                            
                                        </div>                                       
                                    </li>
                                </ul>
                            </div>
                       
                    </nav>