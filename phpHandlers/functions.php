<?php

    // Signup Functions
    function emptyInputSignup($fullName, $email, $password, $cpassword,$address,$tpnumber,$course,$nic){
        $result;
        if(empty($fullName) || empty($email) || empty($password) || empty($cpassword || empty($address) || empty($tpnumber) || empty($course) || empty($nic))){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidFullname($fullName){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $fullName)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function passwordMatch($password, $cpassword){
        $result;
        if($password != $cpassword){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function emailExists($conn, $email){
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../HTML/signup.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    

    // Inserting Data
    function createUser($conn, $fullName, $email, $password,$address,$tpnumber,$course,$nic){

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(fullName, email,password,address,tpnumber,course,nic) VALUES('$fullName','$email','$hashedPwd','$address','$tpnumber','$course','$nic');";
        
        $queryRun = mysqli_query($conn, $query);
        header('location: ../HTML/login.php');
        exit();
    }

    // Login Functions

    function emptyInputLogin($email, $password){
        $result;
        if(empty($email) || empty($password)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function loginDataExists($conn, $email){
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../HTML/login.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s",$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function loginUser($conn, $email, $password){
        $loginDataExists = loginDataExists($conn, $email);

        if($loginDataExists === false){
            header('location: ../HTML/login.php?error=loginFailed');
            exit();
        }

        $pwdHashed = $loginDataExists["password"];
        $checkPassword = password_verify($password, $pwdHashed);

        if($checkPassword === false){
            header('location: ../HTML/login.php?error=wrongpassword');
            exit();
        }
        else if($checkPassword === true){
            //print("Hiii");
            session_start();
            $_SESSION['userID'] = $loginDataExists['userID'];
            $_SESSION['fullname'] = $loginDataExists['fullname'];
            $_SESSION['email'] = $loginDataExists['email'];
            header('location: ../HTML/home.php');
            // echo "<script>alert('Job Done')</script>";
            exit();
        }
    }

?>