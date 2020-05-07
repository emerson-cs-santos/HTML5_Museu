<?php
include('cabec.php');
include('PHP' . DIRECTORY_SEPARATOR . 'conexao_bd.php');
$id = $_GET['id'];
?>
<link rel="stylesheet" href="css/artistas.css">

<h1 class="text-center mt-3">Perfil de usuario</h1>
</div>
</header>
<div class="container">
    <div class='row'>
        <?php
        $sql = "SELECT * FROM `usuarios` WHERE id = $id";

        $busca = mysqli_query($conn, $sql);

        $array = mysqli_fetch_array($busca);

        $nome = $array['nome'];
        $email = $array['email'];


        ?>
        <div style='padding-left: 0%; padding-top: 5%;'>
            <div style="width: 80%;">
                <div>
                    <p>Nome:<?php echo $nome ?></p>
                    <p id="email">E-mail: <?php echo $email ?></p>
                </div>
            </div>
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
        $sql = "SELECT * FROM `obras` WHERE usuario_id = $id";
        $busca = mysqli_query($conn, $sql);

        while ($array = mysqli_fetch_array($busca)) {

            $nome = $array['nome'];
            $descri = $array['descri'];
            $duracao = $array['duracao'];
            $obra = $array['obra'];
            $ativo = $array['ativo'];

        ?>

            <div class='col-lg-4 col-md-6 col-sm-12 col-xs-12' style='padding-left: 0%; padding-top: 5%;'>
                <div class="card" style="width: 80%;">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $nome ?></h3>
                        <p class="card-text"><?php echo $descri ?></p>
                        <p class="card-text"><?php echo $duracao ?></p>
                        <p class="card-text"><?php echo $obra ?></p>
                        <p class="card-text"><?php echo $ativo ?></p>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-success btn-sm card-link " style="color:#ffffff" href="#">Apresentação da Obra</a>
                    </div>
                </div>
            </div>

        <?php

        }

        ?>
    </div>
</div>



</body>

</html>