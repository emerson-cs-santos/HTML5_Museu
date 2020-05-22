<?php
    session_start();
    include('cabec.php');
    include('php'. DIRECTORY_SEPARATOR . 'conexao_bd.php');
    
    $ID = $_GET['ID'];

    if(!isset($ID))
    {
        $ID = 0;
    }
    
	$query = "select * from obras where id = $ID and ativo = 'ativo' order by id desc";
    $result = $conn->query($query);
    
    $nome       = '';
 
    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $nome       = $row["nome"];    
    }  
?>           
                    <h1 class="text-center mt-5">Obra: <?php echo $nome ?></h1>
                </div> 
            </header>

                <main>
                    <section class='row'>
                        <div class='col-12'>

                            <div class='text-center col-12'>
                                <h2> Escolha um modo de apresentação</h2>
                            </div>

                            <div class="col-12 mt-5">
                                <div class="card" >
                                    <div class="card-body text-center">
                                        <h3 class="h5 card-title">Sem repetição</h3>
                                        <p class="card-text">Neste modo a obra ser exibida aos poucos, mas somente uma vez.</p>
                                        <a href="obra_sem_loop.php?ID=<?php echo $ID ?>" class="btn btn-dark">Abrir</a>
                                    </div>    
                                </div>    
                            
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h3 class="h5 card-title">Com repetição</h3>
                                        <p class="card-text">Neste modo a obra vai ser exibida mais rapidamente, mas vai se repetir se o artista quiser.</p>
                                        <a href="obra_loop.php?ID=<?php echo $ID ?>" class="btn btn-secondary">Abrir</a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            <?php 
                include('footer.php'); 
            ?>
        </div>
    </body>
</html>               
