<?php
include('cabec.php');
include('PHP' . DIRECTORY_SEPARATOR . 'conexao_bd.php');
$id = $_GET['id'];
?>
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
<script>
if($repetir = 1) {     
        function typeWriter(elemento) {
                const textoArray = elemento.innerHTML.split('');
                elemento.innerHTML = '';
                for (let i = 0; i < textoArray.length; i++) {
                        setTimeout(() => elemento.innerHTML+= textoArray[i], 15 * i);          
                }        
        }
        
        let escreverObra = document.getElementById('obra');
        typeWriter(escreverObra);
        setInterval(() => { typeWriter(escreverObra)}, 10000); 
}else {
        let escreverObra = document.getElementById('obra');
        typeWriter(escreverObra);
}
        
</script>
</body>

</html>