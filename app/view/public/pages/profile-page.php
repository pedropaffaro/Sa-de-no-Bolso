<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>

        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
        <link rel="stylesheet" href="../style/style.css">    
        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
    </head>
    <body id="page">
        <?php
            include_once('../../src/components/menu.html')
        ?>

        <div class="profile-page">
            <section id="profile-card-section">
                <div id="profile-card">
                    <span class="profile">
                        <span class="profile-picture">
                            <img src="../../src/images/facebook-icon.png" alt="">
                        </span>
                        <span class="profile-name">
                            <?php echo $_SESSION['name']; ?>
                        </span>
                    </span>

                    <span class="profile-informations">
                        <div>CPF: <?php echo $_SESSION['cpf']; ?></div>
                        <div>Data de Nascimento:</div>
                        <div>Doença(s):</div>
                        <div>Deficiência(s):</div>
                        <div>RHM:</div>
                    </span>
                </div>
            </section>
        </div>

        <script src="../scripts/script.js"></script>
    </body>
</html>