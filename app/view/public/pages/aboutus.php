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
            include("../../src/components/menu.html")
        ?>

        <section class="grid-about-us">
            <div class="big-grid">
                <div>
                    <h2>About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="small-grid">
                <div>
                    <h2>Contact Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="small-grid">
                <div>
                    <h2>Project</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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