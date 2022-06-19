<?php
    session_start();

    $cpf = $_POST["cpf"];

    if($cpf == $_SESSION['cpf']){
        header('Location: ../view/public/pages/profile-page.php');
    }
    else{
        echo "CPF não existe";
    }
?>