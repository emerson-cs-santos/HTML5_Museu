<?php
    session_start();
    include('cabec.php');
    include('php' . DIRECTORY_SEPARATOR . 'conexao_bd.php');
    $id = $_GET['ID'];
?>
                    <h1 class="text-center mt-3">Perfil de usuario</h1>
                </div>
            </header>
            
            <main>               
                <div class="container">
                    <div class='row'>
                        <?php
                        $sql = "SELECT * FROM `usuarios` WHERE id = $id";

                        $busca = mysqli_query($conn, $sql);

                        $array = mysqli_fetch_array($busca);

                        $nome = $array['nome'];
                        $email = $array['email'];
                        ?>

                        <div class='col-12'>
                            <div class="text-center">
                                <p>Nome: <?php echo $nome ?></p>
                                <p id="email">E-mail: <?php echo $email ?></p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="container">
                    <div>
                        <h2 class="text-center mt-1">Obras do Artista</h2>
                    </div>
                </div>

                <div class="container">
                    <div class='row'>
                        <?php
                            $sql = "SELECT * FROM `obras` WHERE usuario_id = $id and ativo = 'ativo' ";
                            $busca = mysqli_query($conn, $sql);

                            while ($array = mysqli_fetch_array($busca)) 
                            {

                                $idObra     = $array['id'];
                                $nome       = $array['nome'];
                                $descri     = $array['descri'];
                                $duracao    = $array['duracao'];
                                $obra       = $array['obra'];
                        ?>

                            <div class='col-lg-4 col-md-6 col-sm-12 col-xs-12' style='padding-left: 0%; padding-top: 5%;'>
                                <div class="card" style="width: 80%;">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo "Nome: $nome" ?></h3>
                                        <div class="card-text"><?php echo "Descrição: $descri" ?></div>
                                        <div class="card-text"><?php echo "Duração: $duracao segundo(s)" ?></div>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-success btn-sm card-link " style="color:#ffffff" href="obra.php?ID=<?php echo $idObra ?>"> Apresentação da Obra</a>
                                    </div>
                                </div>
                            </div>

                        <?php } 
                        if ($busca->num_rows == 0)  
                        {
                            echo "
                                <div class='col-12 text-center' style='padding-left: 0%; padding-top: 5%;'>
                                    <div class='card'>
                                        <div class='card-body'>
                                            <h3 class='card-title'> Sem obras </h3>
                                            <div class='card-text'> Perfil sem obras cadastradas... </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                        ?>
                    </div>
                </div>

            </main>
        </div>
    </body>
</html>