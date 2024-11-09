<?php
    include './config.php';

    if(isset($_POST['submit'])){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $tpnumber = $_POST['tpnumber'];
        $course = $_POST['course'];
        $nic = $_POST['nic'];
        $cpassword = $_POST['cpassword'];

        require_once './functions.php';

        if(emptyInputSignup($fullName, $email, $password, $cpassword, $address, $tpnumber, $course, $nic) !== false){
            header('location: ../HTML/signup.php?error=emptyinput');
            exit();
        }

        if(invalidEmail($email) !== false){
            header('location: ../HTML/signup.php?error=invalidemail');
            exit();
        }

        if(passwordMatch($password, $cpassword) !== false){
            header('location: ../HTML/signup.php?error=passwordnotmatch');
            exit();
        }

        if(emailExists($conn, $email) !== false){
            header('location: ../HTML/signup.php?error=emailtaken');
            exit();
        }


        createUser($conn, $fullName, $email, $password, $address, $tpnumber, $course, $nic);

    }
    else{
        header('location: ../HTML/signup.php');
        // print('hii');
        exit();
    }
?>