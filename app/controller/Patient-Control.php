<?php
    $cpf = $_POST["cpf"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $passwordRepaet = password_hash($_POST["password-repeat"], PASSWORD_BCRYPT);
    $name = $_POST["name"];
    $birthDate = $_POST["birth-date"];

    if($cpf == ""){
        echo "CPF não pode ser vazio";
    }
    else{
        if($name == "")
            echo "Nome não pode ser vazio";
        else{
            session_start();

            $_SESSION['cpf'] = $cpf;
            $_SESSION['name'] = $name;
            $_SESSION['birth-date'] = $birthDate;

            header('Location: ../view/public/pages/profile-page.php');
        }
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>

    <link rel="stylesheet" href="../view/public/style/style.css">
</head>
<body>
    
</body>
</html>