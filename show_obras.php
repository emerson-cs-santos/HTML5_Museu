 <?php
    session_start();
    include('cabec.php');
?>
                    <h1 class="text-center mt-5">Obras do Museu</h1>
                </div>
            </header>

            <main>
                <section class="container">
                    <h2 class="text-center">Escolha uma obra para ver sua composição!</h2>
                    <div id="card_obras">

                    </div>
                </section>
            </main>
            <script>
                const parametros = '';
                // Ajax com Jquery e está refazendo apenas a tabela 
                $.post('php/buscar_obras.php', function(data) {
                    $('#card_obras').html(data);
                })

                function animeScroll() {
                    const target = document.querySelectorAll('[data-anime]');
                    const top = window.pageYOffset + ((window.innerHeight * 3) / 4);
                    const animateClass = 'animate';
                    target.forEach(function(element) {
                        if (top > element.offsetTop) {
                            element.classList.add(animateClass);
                        } else {
                            element.classList.remove(animateClass);
                        }
                    })
                }

                animeScroll();
                window.addEventListener('scroll', function() {
                    animeScroll();
                })
            </script>
            <?php
                include('footer.php');
            ?>
        </div>
    </body>
 </html>
