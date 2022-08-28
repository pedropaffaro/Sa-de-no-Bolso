<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Saúde no Bolso</title>

        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="../style/style.css">    
        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
    </head>
    <body id="page" onload="buttonLogin(); buttonSignUp()">

        <?php
            include("../../src/components/menu.php");
        ?>

        <div class="container">
            <div class="img-div"><img src="../../src/images/health.png"></div>
            <!-- <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div>
            <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div>
            <div class="img-div"><img src="https://blogs.iadb.org/brasil/wp-content/uploads/sites/29/2019/12/lista_saude-publica_gestao-em-saude.jpg" alt=""></div> -->
        </div>

        <br>

        <section class="section flex-center column">
            <h3 class="title-section">Saúde no Bolso</h2>
            <p>
                Bem-vindo(a) à sua nova plataforma de agendamento de consultas médicas!
            </p>
            <br>
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

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.container').slick();
            });
        </script>
    </body>
</html>