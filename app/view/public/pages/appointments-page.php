<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointments</title>

        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
        <link rel="stylesheet" href="../style/style.css">    
        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
    </head>
    <body id="page">
        <?php
            include_once('../../src/components/menu.php')
        ?>

        <div class="appointments-page">
            <section class="appointments-controller-section">
                <h3>Your Appointments</h3>
            </section>
            <a href="book-appointments-page.php" class="book-appointments-text-section">
                <section>
                    <h3>Book your Appointment</h3>
                </section>
            </a>
        </div>

        <?php
            include_once("../../src/components/footer.html");
        ?>

        <script src="../scripts/script.js"></script>
    </body>
</html>