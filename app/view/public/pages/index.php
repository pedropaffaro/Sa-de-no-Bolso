<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Saúde no Bolso</title>

        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
        <link rel="stylesheet" href="../style/style.css">    
        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
    </head>
    <body id="page" onload="buttonLogin(); buttonSignUp()">

        <?php
            include("../../src/components/menu.html");
        ?>

        <section class="container fade">
            <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div>
            <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div>
            <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div>
            <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div>
        </section>

        <section class="section flex-center column">
            <h3 class="title-section">Lorem ipsum</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed ultrices aenean mauris donec id egestas scelerisque.
            </p>
            <button id="btn-marque-agora"><i class="fa-solid fa-address-book"></i>  Marque Agora</button>
        </section>

        <?php 
            include_once("../../src/components/footer.html");
        ?>

        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.jj"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
        <script src="../scripts/slick.js"></script>
        <script src="../scripts/script.js"></script>
    </body>
</html>