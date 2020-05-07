<?php
include('cabec.php');
include('PHP'. DIRECTORY_SEPARATOR . 'conexao_bd.php');
?>
<link rel="stylesheet" href="css/artistas.css">

<h1 class="text-center mt-3 titulo">Artistas</h1>
</div>
</header>

<main>
    <div class="container">
        <section class='row'>
            <?php
                $sql = "SELECT * FROM `usuarios`";
                $busca = mysqli_query($conn, $sql);

                while($array = mysqli_fetch_array($busca)) {
                    $id = $array['id'];
                    $nome = $array['nome'];
                    $email = $array['email'];   
            ?>

            <div class='col-lg-4 col-md-6 col-sm-12 col-xs-12' style='padding-left: 0%; padding-top: 5%;'>
                <div class="card" style="width: 80%;">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $nome?></h2>
                        <p class="card-text"><?php echo $email?></p>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary btn-sm card-link " style="color:#ffffff" href="visualizar_perfil.php?id=<?php echo $id ?>">Visualizar Perfil</a>
                    </div>
                </div>
            </div>

            <?php

                }
            
            ?>
        </section>
    </div>
</main>

<?php
include('footer.php');
?>
</div>
</body>

</html>