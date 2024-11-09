
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <title>Starbright Uni</title>
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
                    <img src="../IMAGES/signup.png" alt="logo">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form " >
                    
                        <div class="row">
                            <h2>&nbsp;&nbsp;&nbsp;&nbsp; Registration</h2>
                        </div>
                            <form action="../phpHandlers/signup.php" method="POST" class="form-group">
                            
                                <div class="row">
                                    <input type="text" name="fullName"  class="form__input"
                                        placeholder="Full Name">
                                
                                    
                                    <input type="email" name="email" class="form__input"
                                        placeholder="Email">

                                        <input type="text" name="nic" class="form__input" placeholder="NIC Number">

                                    <input type="text" name="address" class="form__input" placeholder="Address">

                                    <input type="tel" name="tpnumber" class="form__input" placeholder="TP Number">

                                    <input type="text" name="course" class="form__input" placeholder="Course">
                                    <input type="password" name="password" class="form__input" placeholder="password">
                                    <input type="password" name="cpassword" class="form__input" placeholder="cpassword">

                                 
                            
                                    <!-- <button type="button" id="login" name="login" class="btn">Login</button> -->
                                    <input type="submit" name="submit" value="Register" class="btn">
                                    <a href="./login.php" ><h4>I have an account</h4></a>
                                </div>
                            </form>
                </div>
            </div>
        </div>
        <div class="custom-message">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            // echo "<p>☹️ Fill all the fields! ☹️</p>";
                            echo "<script>alert('☹ Fill all the fields! ☹');</script>";
                        }
                        if($_GET["error"] == "invalidusername"){
                            // echo "<p>☹️ Invalid Username! ☹️</p>";
                            echo "<script>alert('☹ Invalid Username! ☹');</script>";
                        }
                        if($_GET["error"] == "invalidemail"){
                            // echo "<p>☹️ Invalid Email! ☹️</p>";
                            echo "<script>alert('☹ Invalid Email! ☹');</script>";
                        }
                        if($_GET["error"] == "passwordnotmatch"){
                            echo "<script>alert('☹ Passwords are not match! ☹');</script>";
                        }
                        if($_GET["error"] == "usernametaken"){
                            echo "<script>alert('☹ Username is taken! ☹');</script>";
                        }
                        if($_GET["error"] == "emailtaken"){
                            echo "<script>alert('☹ Email is taken! ☹');</script>";
                        }
                        if($_GET["error"] == "mobilenumbertaken"){
                            echo "<script>alert('☹ Mobile Number is taken! ☹');</script>";
                        }
                    }
                ?>
            </div>
</body>
</html>
