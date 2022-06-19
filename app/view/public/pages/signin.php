<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../style/style.css">    

        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">

        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
        <script src="../scripts/sweetAlert.js"></script>
        <script src="../scripts/google.js"></script>
        <script src="https://accounts.google.com/gsi/client" async defer></script>   
        <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>
    </head>

    <body id="page" onload="darkTheme()">
        <div class="container-formulario">
            <form class="form-cadastro" method="POST" action="../../../controller/Patient-Login.php">
                <div class="img-formulario">
                    <img src="../../src/images/sign-in-img.svg" alt="">
                </div>

                <div class="form">
                    <h3 class="text-login" align="center">LOGIN</h3>
                    <div class="div-cpf">
                        <div class="div-cpf-icon"><i class="fa-regular fa-user"></i></div>
                        <input type="text" name="cpf" id="cpf" placeholder="CPF">
                    </div>
                    <div class="div-password">
                        <div class="div-password-text">
                            <div class="div-password-icon"><i class="fa-solid fa-lock"></i></div>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="texts-password">
                            <div>
                                <input type="checkbox" name="" id="remember">
                                <label class="text-remember" for="remember">Remember me</label>
                            </div>
                            <div class="text-forgot">Forgot password</div>
                        </div>
                    </div>
                    <div class="div-login">
                        <input type="submit" id="login" value="LOGIN" onclick="formValidation()">
                    </div>
                    <div class="div-hr-form">
                        <hr class="hr-form">
                    </div>
                    <div align="center" class="sign-up">
                        <a href="" class="sign-up-with">SIGN UP WITH</a>
                        <div class="social-sign-up">
                            <div id="buttonDiv"></div>
                        </div>
                        <div class="or">
                            OR
                        </div>
                        <a href="signup.php" class="sign-up-with">SIGN UP</a>
                    </div>
                </div>
            </form>
        </div>

        <script src="../scripts/script.js"></script>
    </body>
</html>