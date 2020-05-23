<?php
session_start();
include('cabec.php');
<<<<<<< Updated upstream:visualizar_obra.php
include('PHP' . DIRECTORY_SEPARATOR . 'conexao_bd.php');
$id = $_GET['id'];
?>
</div>
</header>
<?php
$sql = "SELECT * FROM `usuarios` WHERE id = $id";

$busca = mysqli_query($conn, $sql);

$array = mysqli_fetch_array($busca);

$nome = $array['nome'];

?>
<?php
$sql = "SELECT * FROM `obras` WHERE usuario_id = $id";
$busca = mysqli_query($conn, $sql);
=======
include('php' . DIRECTORY_SEPARATOR . 'conexao_bd.php');

$ID = $_GET['ID'];

if (!isset($ID)) {
    $ID = 0;
}

$query = "select * from obras where id = $ID and ativo = 'ativo' order by id desc";
$result = $conn->query($query);

$obraOK = true;

$id         = '';
$nome       = '';
$descri     = '';
$obra       = '';
>>>>>>> Stashed changes:obra_loop.php

$duracao    = 0;
$repetir    = 0;

$usuario_id = 0;

if ($result->num_rows > 0) {
    $obraOK = true;
    $row = $result->fetch_assoc();
    $id         = $row["id"];
    $nome       = $row["nome"];
    $descri     = $row["descri"];
    $obra       = $row["obra"];

    $duracao    = $row["duracao"];
    $repetir    = $row["repetir"];

    $usuario_id = $row["usuario_id"];
} else {
    $obraOK = false;
}

?>
<h1 class="text-center mt-5"><?php echo $nome ?></h1>
</div>
</header>

<main>
    <section class='row'>

        <?php
        if ($obraOK == true) {
            if ($repetir == 0) {
                $classeLoop = 'animation';
            } else {
                $classeLoop = 'animation_lopp';
            }

            echo
                "
                            <div class='text-center col-12 mt-4'>
                                <div class='card'>
                                    <div class='card-body text-center $classeLoop'>
                                        <h2 class='card-text font-weight-bold mb-3'>Descrição: $descri</h2>
                                        <div class='card-subtitle mb-2 text-muted'>Duração aproximada: $duracao segundo(s)</div>
                                        
                                        <div class='terminal'>
                                            <div class='card-text'>$obra</div>
                                        </div>  
                                        <a href='apresentacao_obras.php' class='card-link mt-2'>Todas as obras</a>
                                        <a href='perfilAberto.php?ID=$usuario_id' class='card-link'>Perfil e Obras do artista</a>
                                    </div>
                                </div>    
                            </div> 
                            ";
        } else {
            echo
                "
                            <div class='text-center col-12'>
                            <div class='card'>
                                <div class='card-body text-center'>
                                    <h3 class='card-title h5'>Obra não disponível</h3>
                                    <p class='card-text'>Não há obra para exibir...</p>
                                    <p class='card-text'>A obra pode estar inativa.</p>
                                </div>
                            </div>    
                        </div>  
                            ";
        }
        ?>
    </section>
</main>

<?php
include('footer.php');
?>

<script>
    typeWriting();

    setInterval(typeWriting, 70000);

    function typeWriting() {
        var typeWriting = new TypeWriting({

            targetElement: document.getElementsByClassName('terminal')[0],
            inputString: document.getElementsByClassName('terminal')[0].innerHTML,

            typing_interval: 150, // Interval between each character

            blink_interval: '0.5s', // Interval of the cursor blinks

            cursor_color: '#00fd55', // Color of the cursor

        }, function() {
            document.getElementsByClassName('terminal')[0].innerHTML = document.getElementsByClassName('terminal')[0].innerHTML;
        });
    }
</script>
</div>
</body>

</html>