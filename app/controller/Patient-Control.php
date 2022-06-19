<?php
    $cpf = $_POST["cpf"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $passwordRepaet = password_hash($_POST["password-repeat"], PASSWORD_BCRYPT);
    $name = $_POST["name"];

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

            header('Location: ../view/public/pages/profile-page.php');
        }
    }
        
?>