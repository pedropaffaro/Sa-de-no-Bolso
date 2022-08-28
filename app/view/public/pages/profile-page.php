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
            if(!isset($_SESSION["isLogged"])){
                echo "<span>Access denied!</span>
                    <hr>
                    <a href='signin.php'>Login</a>";
            }
            else{
                include_once('../../src/components/menu.php');

                include('../../../database/connection.php');

                $cpf = $_SESSION["cpf"];
                
                $stmt = $pdo->prepare('select * from Patient where cpf = :cpf');
                $stmt->bindParam(':cpf', $cpf);

                try{
                    $stmt->execute();

                    while($row = $stmt->fetch()){
                        $cpf = $row["cpf"];
                        $name = $row["patientName"];
                        $birthDate = $row["patientBirthDate"];
                    }

                    echo "<div class='profile-page'>
                    <span class='logout'>
                        <h3>Informações Pessoais</h3>
                        <a href='../../../controller/Logout.php'><i class='fa-solid fa-arrow-right-from-bracket'></i>  Sair</a>
                    </span>
                    <section id='profile-card-section'>
                        <div id='profile-card'>
                            <span class='profile'>
                                <span class='profile-picture'>
                                    <img src='../../src/images/icon.png'>
                                </span>
                                <span class='profile-name'>" .
                                    $name.
                                "</span>
                            </span>
        
                            <span class='profile-informations'>
                                <div><strong>CPF:</strong> " . $cpf . "</div>
                                <div><strong>Data de Nascimento:</strong> ". $birthDate . "</div>
                                <div><strong>Doença(s):</strong></div>
                                <div><strong>Deficiência(s):</strong></div>
                            </span>
                        </div>
                    </section>
                </div>";
                include_once("../../src/components/footer.html");
                }
                catch(PDOException $e){
                    echo 'Error: ' . $e->getMessage();
                }

                
            }
        ?>

        <script src="../scripts/script.js"></script>
    </body>
</html>