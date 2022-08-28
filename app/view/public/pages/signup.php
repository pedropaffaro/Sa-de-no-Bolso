<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="../style/style.css">   
        
        <link rel="icon" type="image/x-icon" href="../../src/images/favicon.ico">

        <script src="https://kit.fontawesome.com/238505cf66.js" crossorigin="anonymous"></script>
        <script src="../scripts/sweetAlert.js"></script>
        <script src="../scripts/google.js"></script>
        <script src="https://accounts.google.com/gsi/client" async defer></script>   
        <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>
    </head>
    <body id="page">
        <div class="container-formulario">
            <form class="form-cadastro" method="POST">
                <div class="img-formulario">
                    <img src="../../src/images/sign-up-img.svg" alt="">
                </div>

                <div class="form">
                    <h3 class="text-login" align="center">SIGN UP</h3>
                    <div class="div-cpf">
                        <div class="div-cpf-icon"><i class="fa-solid fa-id-card"></i></div>
                        <input type="text" name="cpf" id="cpf" placeholder="CPF" data-js="cpf">
                    </div>
                    <div class="div-name">
                        <div class="div-name-icon"><i class="fa-regular fa-user"></i></div>
                        <input type="text" name="name" id="name" placeholder="Nome">
                    </div>
                    <div class="div-birth-date">
                        <div class="div-birth-date-icon"><i class="fa-solid fa-calendar-days"></i></div>
                        <input type="date" name="birth-date" id="birth-date" placeholder="Date">
                    </div>
                    <div class="div-password">
                        <div class="div-password-text">
                            <div class="div-password-icon"><i class="fa-solid fa-lock"></i></div>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="div-password-r-text">
                            <div class="div-password-icon"><i class="fa-solid fa-lock"></i></div>
                            <input type="password" name="password-repeat" id="password-repeat" placeholder="Repeat Password">
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
                        <input type="submit" id="signup" value="SIGN UP" onclick="handleSignUpValidation(event)">
                    </div>
                </div>
            </form>
        </div>        

        <script src="../scripts/script.js"></script>
        <script src="../scripts/formValidation.js"></script>
        
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
            $name = $_POST['name'];
            $birthDate = $_POST['birth-date'];
            $password = $_POST['password'];
            $password = base64_encode($password);

            $stmt = $pdo->prepare("select * from Patient where cpf = :cpf");
            $stmt->bindParam(':cpf', $cpf);
            $stmt->execute();

            $rows = $stmt->rowCount();

            if($rows <= 0){
                echo "teste";
                $stmt = $pdo->prepare('insert into Patient (cpf,patientName,patientBirthDate,patientPassword) values (:cpf,:name,:birthDate,:password)');
                $stmt->bindParam(':cpf', $cpf);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':birthDate', $birthDate);
                $stmt->bindParam(':password', $password);
                $stmt->execute();

                $_SESSION["isLogged"] = 1;
                $_SESSION["cpf"] = $cpf;
 
                header('location:profile-page.php');
            }
            else{
                echo "<span>CPF aready exists!</span>";
            }  
        }
        catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }
?>