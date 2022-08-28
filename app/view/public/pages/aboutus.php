<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>

        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">
        
        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body id="page" onload="buttonLogin(); buttonSignUp(); darkTheme()">

        <?php
            include("../../src/components/menu.php")
        ?>

        <section class="grid-about-us">
            <div class="big-grid">
                <div>
                    <h2>About Us</h2>
                    <p>
                        Nós somos um grupo constituído por cinco alunos do 3° ano do Curso Técnico de Informática do COTIL, e para o nosso TCC resolvemos criar uma plataforma para facilitar o agendamento de consultas médicas, além de criar uma carteira do paciente, a qual mostra os dados do usuário e todas as suas patologias e/ou suas deficiências.
                    </p>
                </div>
            </div>
            <div class="small-grid">
                <div>
                    <h2>Contact Us</h2>
                    <p>
                        Email: contato@saudenobolso.com
                        <br>
                        Telefone: (19) 98998-9789
                    </p>
                </div>
            </div>
            <div class="small-grid">
                <div>
                    <h2>Project</h2>
                    <p>
                        Trabalho de conclusão de curso - 2022 - Colégio Técnico de Limeira (COTIL).
                    </p>
                </div>
            </div>
        </section>

        <?php 
            include_once("../../src/components/footer.html");
        ?>

        <script src="../scripts/script.js"></script>
    </body>
</html>