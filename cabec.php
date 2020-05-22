<!DOCTYPE html>
<html lang="pt-br">
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

        <!-- Ativar modo Mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1">         

        <!-- Biblioteca de ícones -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   -->
        <!-- <link rel="stylesheet" href="css/font-awesome.min.css">  -->

        <!-- CSS -->
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/artistas.css">
        <link rel="stylesheet" href="css/mobile.css">
        <link rel="stylesheet" href="css/_cursor.css">
        <link rel="stylesheet" href="css/show_obras.css">

        <!-- JavaScript -->
        <script src="js/login.js"></script>
        <script src="js/registrar.js"></script>
        <script src="js/usuario.js"></script>
        <script src="js/edicaoObra.js"></script>
        <script src="js/funcoes.js"></script>

        <script src="js/typewriting.js"></script>
    </head>

    <body>
        <div class='container'>
            <header class='row'>
                <div class="col-12">

                    <nav id='navbar' class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">

                            <a class="nav_link col-2" href='index.php'><img src='Imagens/icon.png' alt='Logo do site' style='height:100px; width:100px;' data-placement="top" data-toggle="tooltip" title="Voltar a tela inicial"></a>
                      
                            <a class="navbar-brand p-4 col-3" href="index.php" data-placement="top" data-toggle="tooltip" title="Voltar a tela inicial">
                                Home
                            </a>
                            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                               
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto text-center">
                                    <li class="nav-item">
                                        <a class="nav-link" href="show_obras.php" data-placement="top" data-toggle="tooltip" title="Exibição simples das obras">Obras</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="apresentacao_obras.php" data-placement="top" data-toggle="tooltip" title="Lista com todas as obras">Lista das Obras</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="artistas.php" data-placement="top" data-toggle="tooltip" title="Lista dos artistas do Museu">Artistas</a>
                                    </li>                                     
                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    <!-- Exemplo de 1 item, sem subOpção
                                    <li class="nav-item">
                                            <a class="nav-link" href="#">Home</a>
                                    </li>-->
                                    
                                    <li class="nav-item dropdown text-center">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php
                                                if (isset($_SESSION['controle']))
                                                {
                                                    $user = $_SESSION['controle'];
                                                    echo "Bem vindo! $user";
                                                }
                                                else
                                                {
                                                    echo " Convidado ";
                                                }
                                            ?>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="perfil.php" data-placement="top" data-toggle="tooltip" title="Acessar suas informações">
                                                Perfil
                                            </a>
                                            <a class="dropdown-item" href="minhasObras.php" data-placement="top" data-toggle="tooltip" title="Acessar suas obras">
                                                Minhas Obras
                                            </a>

                                            <?php
                                                if (isset($_SESSION['controle']))
                                                {
                                                    echo "<a class='dropdown-item' href='php/sair.php' data-placement='top' data-toggle='tooltip' title='Encerrar sessão'> Sair </a>";
                                                }
                                            ?>                                            
                                        </div>                                       
                                    </li>
                                </ul>
                            </div>
                       
                    </nav>