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

    <body id="page" onload="">
        <div class="container-formulario">
            <form class="form-cadastro" method="POST" onsubmit="handleSignInValidation(event);">
                <div class="img-formulario">
                    <img src="../../src/images/sign-in-img.svg" alt="">
                </div>

                <div class="form">
                    <h3 class="text-login" align="center">LOGIN</h3>
                    <div class="div-cpf">
                        <div class="div-cpf-icon"><i class="fa-regular fa-user"></i></div>
                        <input type="text" name="cpf" class="cpf" id="cpf" placeholder="CPF">
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
                        <input type="submit" id="login" value="LOGIN" onclick="handleRememberMe()">
                    </div>
                </div>
            </form>
        </div>

        <script src="../scripts/script.js"></script>
        <script src="../scripts/formValidation.js"></script>
        <script src="../scripts/rememberMe.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="../scripts/jquery.mask.js"></script>

        <script>
            $(document).ready(function(){
                $('#cpf').mask('000.000.000-00');
            });
        </script>
    </body>
</html>

<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        try{
            include('../../../database/connection.php');

            $cpf = $_POST['cpf'];
            $password = $_POST['password'];
            $password = base64_encode($password);

            $stmt = $pdo->prepare("select * from Patient where cpf = :cpf and patientPassword = :password");
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $rows = $stmt->rowCount();

            if($rows > 0){
                $_SESSION["isLogged"] = 1;
                $_SESSION["cpf"] = $cpf;
 
                header('location:profile-page.php');
            }
            else{
                echo "<span>Patient doesn't exists!</span>";
            }  
        }
        catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }
?>
