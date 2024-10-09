<?php include('config.php')?>

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

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>assets/css/style.css">

    <title>WEB 2</title>
</head>

<body>

    <?php
       // echo $_GET['url'];
    ?>

    <!--header-->
    <header>
    </header>
    <!--header-->

    <?php
    //Obtendo a url se existir ou home
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    ?>

   
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

    <script src="<?php echo INCLUDE_PATH;?>assets/js/scripts.js"></script>
</body>

</html>