<header id="menu"> 
    <ul class="menu">
        <li class="logo-header"><a href="index.php"><img src="../../src/images/logo-without-background.png" alt=""></a></li>
        <div class="div-header">
            <li class="txt-sobre"><a href="aboutus.php" id="link-about">About Us</a></li>
            <div class="div-hr"><hr id="hr"></div>
            <?php
                if(!isset($_SESSION["isLogged"])){
                    echo "
                        <li><button id='btn-login' onclick='handleGoSignInPage()'><i class='fa-solid fa-user'></i>  Login</button></li>
                        <li><button id='btn-signup' onclick='handleGoSignUpPage()'><i class='fa-solid fa-user-plus'></i> Sign Up</button></li>
                    ";
                }
                else{
                    echo "
                        <li><button id='btn-appointment' onclick='handleGoAppointmentsPage()'><i class='fa-solid fa-user'></i>  Appointments</button></li>
                    ";
                }
            ?>
        </div>
    </ul>
</header>