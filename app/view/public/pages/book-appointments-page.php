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

        <div class="book-appointments-page">
            <section class="book-appointments">
                <h3>Book Your Appointment</h3>
                <form action="">
                <div class="div-state">
                        <div class="div-state-icon"><i class="fa-solid fa-flag"></i></div>
                        <select name="state" id="state" onchange="handleSelectedState()">
                            <!-- API IBGE -->
                        </select>
                    </div>
                    <div class="div-city">
                        <div class="div-city-icon"><i class="fa-solid fa-city"></i></div>
                        <select name="city" id="city">
                            <option value="" selected disabled hidden>City</option>
                            <!-- API IBGE -->
                        </select>
                    </div>
                    <div class="div-clinic">
                        <div class="div-clinic-icon"><i class="fa-solid fa-house-chimney-medical"></i></div>
                        <select name="clinic" id="clinic">
                            <option value="" selected disabled hidden>Clinic</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="div-doctor">
                        <div class="div-doctor-icon"><i class="fa-solid fa-user-doctor"></i></div>
                        <select name="doctor" id="doctor">
                            <option value="" selected disabled hidden>Doctor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </form>
            </section>
        </div>

        <?php
            include_once("../../src/components/footer.html");
        ?>

        <script src="../scripts/script.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="../scripts/handleConsultStateCity.js"></script>
    </body>
</html>