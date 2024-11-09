
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <title>Starbright uni</title>
    <link rel="stylesheet" href="../CSS/login.css">

</style>  
</head> 
<body>
    
        <div class="container-fluid">
            <div class="row main-content bg-success text-center">
                <div class="col-md-4 text-center company__info" >
                    
<div style="text-align: center;">
                <a href="../HTML/home.php" class="logo"><img src="../IMAGES/Logo.jpeg" width="60" alt="Logo"></a>
</div>
                    <img src="../IMAGES/login.png" alt="logo">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form " >
                        <div class="row">
                            <h2>&nbsp;&nbsp;&nbsp;&nbsp; Log In</h2>
                        </div>
                            <form action="../phpHandlers/login.php" method="POST" class="form-group">
                            
                                <div class="row">
                                    <input type="text" name="email"  class="form__input"
                                        placeholder="email">
                                
                                    
                                    <input type="password" name="password" class="form__input"
                                        placeholder="password Number">
                                    <!-- <button type="button" id="login" name="login" class="btn">Login</button> -->
                                    <input type="submit" name="submit" value="Login" class="btn">
                                </div>
                                <a href="signup.php" ><h4>Don't you have an account?</h4></a>
                               
                            </form>
                </div>
            </div>
        </div>
        <div class="custom-message">
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<script>alert('☹ Fill all the fields! ☹');</script>";
                    }
                    if($_GET["error"] == "loginFailed"){
                        // echo "<p>Incorrect Username/Email</p>";
                        echo "<script>alert('☹ Incorrect Username/Email! ☹');</script>";
                    }
                    if($_GET["error"] == "wrongpassword"){
                        // echo "<p>Incorrect Password</p>";
                        echo "<script>alert('☹ Incorrect Password! ☹');</script>";
                    }
                }
            ?>
        </div>
</body>
</html>

<?php
    //include './footer.php';
?>