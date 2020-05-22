<?php
    session_start();
    include('cabec.php');
    include('php'. DIRECTORY_SEPARATOR . 'conexao_bd.php');

    $query = 
    "   
    select 
        obr.*
        ,coalesce(user.nome,'') as nome_user 
    from 
        obras obr 
        left join usuarios user on user.id = obr.usuario_id 
    where 
        obr.ativo = 'ativo' 
    order by 
        obr.id 
    desc    
    ";
	$result = $conn->query($query);    
?>           
                    <h1 class="text-center mt-5">Lista das obras</h1>
                </div> 
            </header>

                <main>
                    <section class='row'>
                
                    <?php
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $id         = $row["id"];
                                $nome       = $row["nome"];
                                $descri     = $row["descri"];
                                $obra       = $row["obra"];

                                $duracao    = $row["duracao"];
                                $repetir    = $row["repetir"];

                                $usuario_id = $row["usuario_id"];
                                $nome_user  = $row["nome_user"];
                                echo 
                                "
                                <div class='text-center col-12 mt-4'>
                                    <div class='card'>
                                        <div class='card-body text-center'>
                                            <h2 class='card-title'>$nome</h2>
                                            <div class='card-subtitle mb-1 text-muted'>Duração aproximada: $duracao segundo(s)</div>
                                            <div class='card-text font-weight-bold mb-1'>Descrição: $descri</div>
                                            <!-- <div class='card-text mb-1'>$obra</div> -->
                                            <div class='card-text blockquote-footer'>Autor: $nome_user </div>
                                            <a href='obra.php?ID=$id' class='card-link mt-2'>Ver Obra</a>
                                            <a href='perfilAberto.php?ID=$usuario_id' class='card-link'>Ver perfil do artista</a>
                                        </div>
                                    </div>    
                                </div> 
                                ";
                            }
                        }
                        else
                        {
                            echo 
                            "
                            <div class='text-center col-12'>
                            <div class='card'>
                                <div class='card-body text-center'>
                                    <h5 class='card-title'>Sem obras</h5>
                                    <p class='card-text'>Não há obras para exibir...</p>
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
        </div>
    </body>
</html>