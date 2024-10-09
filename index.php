<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição">
    <meta name="keywords" content="Palavra-chave 1, 2, 3">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>WEB 2</title>
</head>

<body>

    <?php
        echo $_GET['url'];
    ?>

    <!--header-->
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Depoimentos</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="bars-mobile fa-solid fa-bars"></div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Depoimentos</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <!--header-->

    <!--Banner principal-->
    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form action="">
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" id="email" required>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </div>
    </section>
    <!--Banner principal-->

    <!--Descrição autor-->
    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Leandro Balaban</h2>
                <p>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Dolor rerum assumendaepellat,
                    exercitationem .</p>
                <p>Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Dolor rerum assumendaepellat,
                    exercitationem .</p>
            </div>
            <div class="w50 left">
                <img src="assets/img/imagem-ifpr.jpg" alt="Local de trabalho">
            </div>
            <div class="clear"></div>
            <!--Clear float-->
        </div>
    </section>
    <!--Descrição autor-->

    <!--Especialidades-->
    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidades">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h3>HTML 5</h3>
                <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Iste dolorum excepturi itaque veritatis
                    quam magnam, facilis eligendi incidunt consectetur
                    voluptas praesentium aliquid rerum fugiat</p>
            </div>
            <div class="w33 left box-especialidades">
                <h3><i class="fa-brands fa-css3"></i></h3>
                <h3>CSS 3</h3>
                <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Iste dolorum excepturi itaque veritatis
                    quam magnam, facilis eligendi incidunt consectetur
                    voluptas praesentium aliquid rerum fugiat</p>
            </div>
            <div class="w33 left box-especialidades">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h3>JS</h3>
                <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Iste dolorum excepturi itaque veritatis
                    quam magnam, facilis eligendi incidunt consectetur
                    voluptas praesentium aliquid rerum fugiat</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <!--Especialidades-->

    <!--Extras-->
    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Assumenda, totam repudiandae? Officiis id nemo iste ipsa
                        perferendis quas totam natus voluptatem
                        ,quisquam, quidem illo velit vel illum qui accusantium reiciendis?
                    </p>
                    <p class="nome-autor">Lorem ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cupiditate
                        saepe consequuntur voluptatibus quae placeat, nostrum sunt illo numquam,
                        aliquid dolore, quas ullam recusandae? Iste eum rem qui laboriosam minima.
                    </p>
                    <p class="nome-autor">Lorem ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cupiditate
                        saepe consequuntur voluptatibus quae placeat, nostrum sunt illo numquam,
                        aliquid dolore, quas ullam recusandae? Iste eum rem qui laboriosam minima.
                    </p>
                    <p class="nome-autor">Lorem ipsum</p>
                </div>
            </div>

            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem
                            animi aut, eius, ullam quo illum veniam excepturi nostrum a cumque facilis
                            deleniti laudantium ratione dicta? Enim hic aspernatur praesentium tenetur.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem
                            animi aut, eius, ullam quo illum veniam excepturi nostrum a cumque facilis
                            deleniti laudantium ratione dicta? Enim hic aspernatur praesentium tenetur.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem
                            animi aut, eius, ullam quo illum veniam excepturi nostrum a cumque facilis
                            deleniti laudantium ratione dicta? Enim hic aspernatur praesentium tenetur.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="clear"></div>
            <!--clear float-->
        </div>
    </section>
    <!--Extras-->

    <!--Footer-->
    <footer>
        <div class="center">
            <p>Todos os direitos reservados!</p>
        </div>
    </footer>
    <!--Footer-->

    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery-->

    <script src="assets/js/scripts.js"></script>
</body>

</html>