<?php
    session_start();
    include('cabec.php');
?>           
                    <h1 class="text-center mt-5">Museu</h1>
                </div> 
            </header>

                <main>
                    <section class='row'>

                        <div class='text-center col-12'>
                            <h2> Bem vindo ao museu textual! </h2>
                        </div>

                        <div class="col-12 row mt-5">
                            <div class="col-6">
                                <div class="card" >
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Obras do Museu</h5>
                                        <p class="card-text">Veja aqui obras contruidas usando apenas texto!</p>
                                        <a href="apresentacao_obras.php" class="btn btn-primary">Ver Obras do Museu</a>
                                    </div>
                                </div>      
                            </div>    
                            
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Artistas</h5>
                                        <p class="card-text">Conheça os artistas por trás das obras!</p>
                                        <a href="apresentacao_obras.php" class="btn btn-info">Ver Artistas</a>
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
