<?php
    session_start();

    // Se já iniciou sessão, não precisa logar novamente
    if (isset($_SESSION['controle'])) 
    {
      header('Location: Index.php');
    }     
    include('cabec.php');
?>

                <h1 class="text-center mt-3">Acesso restrito</h1>
            </div>
        </header>

        <main>
            <section>
                <div class='form-group mt-3 col-12'>
                    <header>
                        <h2>Login</h2>
                    </header>                

                    <input type="text"      id="login_user" class="form-control mt-3" placeholder="Usuário" data-placement="top" data-toggle="tooltip" title="Digite nome do seu login">
                    <input type="password"  id="login_senha" class="form-control mt-3" placeholder="Senha" data-placement="top" data-toggle="tooltip" title="Digite sua senha">
                  
                    <input type="button" class="btn btn-dark mt-3" Value ="Entrar" onclick="login()" data-placement="top" data-toggle="tooltip" title="Acessar suas obras">
                    <a href="registrar.php" class='btn btn-secondary mt-3 ml-3' data-placement="top" data-toggle="tooltip" title="Criar acesso">Registrar-se</a>
                </div>
                
            </section>
        </main>

        <script>

        // Executa o login ao pressionar a tecla enter 
        $(document).ready(function()
        {
            $(document).keypress(function(e)
            {
                if(e.wich == 13 || e.keyCode == 13)
                {
                    login();
	            }
            })
        })

        </script>

        <?php
            include('footer.php');
        ?>
    </div>
</body>

</html>