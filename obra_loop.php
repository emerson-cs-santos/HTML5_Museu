<?php
include('cabec.php');
include('PHP' . DIRECTORY_SEPARATOR . 'conexao_bd.php');
$id = $_GET['ID'];
?>
</div>
</header>
<?php
// $sql = "SELECT * FROM `usuarios` WHERE id = $id";

// $busca = mysqli_query($conn, $sql);

// $array = mysqli_fetch_array($busca);

// $nome = $array['nome'];

$nome = 'teste'

?>
<?php
$sql = "SELECT * FROM `obras` WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while ($array = mysqli_fetch_array($busca)) {

        $nome = $array['nome'];
        $descri = $array['descri'];
        $duracao = $array['duracao'];
        $repetir = $array['repetir'];
        $obra = $array['obra'];
        $ativo = $array['ativo'];

?>
        <div class="container">
                <div class="row">
                        <div class="col-lg-8">
                                <!-- Titulo -->
                                <h1 style="text-align:center" class="mt-4"><?php echo $nome ?></h1>
                                <!-- Autor -->
                                <?php
                                $sql = "SELECT * FROM `usuarios` WHERE id = $id";
                                $busca = mysqli_query($conn, $sql);

                                while ($array = mysqli_fetch_array($busca)) {
                                        $id = $array['id'];
                                        $nome = $array['nome'];
                                ?>
                                        <p style="text-align:center" class="lead">
                                                Autor:
                                                <a href="visualizar_perfil.php?id=<?php echo $id ?>"><?php echo $nome ?></a>
                                        </p>
                                <?php } ?>
                                <hr>
                                <!-- Duração da Obra -->
                                <p style="text-align:center">Duração: <?php echo $duracao ?> seg</p>
                                <hr>
                                <!-- Obra -->
                                <p id='obra'><?php echo $obra ?></p>
                                <hr>
                        </div>
                        <!-- Sidebar Descrição -->
                        <div class="col-md-4">
                                <div class="card my-4">
                                        <h5 class="card-header">Descrição</h5>
                                        <div class="card-body">
                                                <?php echo $descri ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
<?php
}
?>
<?php
include('footer.php');
?>
</div>

<script>
        if ($repetir = 1) {
                function typeWriter(elemento) {
                        const textoArray = elemento.innerHTML.split('');
                        var textoArrayFiltro = [];
                        var tempText = "";
                        var encontrouTag = false;
                        for (let i = 0; i < textoArray.length; i++) {
                                if (textoArray[i] != '<' && encontrouTag == false) {
                                        textoArrayFiltro.push(textoArray[i]);
                                } else if (textoArray[i] == '<') {
                                        encontrouTag = true;
                                        tempText += textoArray[i];
                                } else if (textoArray[i] != '>') {
                                        tempText += textoArray[i];
                                } else if (textoArray[i] == '>') {
                                        encontrouTag = false;
                                        tempText += textoArray[i];
                                        textoArrayFiltro.push(tempText);
                                        tempText = "";
                                }
                        }
                        elemento.innerHTML = "";
                        var texto = "";
                        for (let i = 0; i < textoArrayFiltro.length; i++) {
                                setTimeout(() => {
                                        texto += textoArrayFiltro[i];
                                        elemento.innerHTML = texto
                                }, 20 * i);
                        }
                }
                const escreverObra = document.getElementById('obra');
                typeWriter(escreverObra);
                setInterval(() => {
                        typeWriter(escreverObra)
                }, 20000);
        } else {
                const escreverObra = document.getElementById('obra');
                typeWriter(escreverObra);
        }
</script>
</body>

</html>