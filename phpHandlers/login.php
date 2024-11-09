<?php
    include './config.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once './functions.php';

        if(emptyInputLogin($email, $password) !== false){
            header('location: ../HTML/login.php?error=emptyinput');
            exit();
        }

        loginUser($conn, $email, $password);
    }
    else{
        header('location: ../HTML/login.php');
        exit();
    }

?>