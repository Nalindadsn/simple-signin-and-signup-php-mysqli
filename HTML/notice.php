<?php
    include '../phpHandlers/config.php';
    session_start();
    ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>college uni</title>

       <link rel="stylesheet" href="../CSS/contact us.css">
    <link rel="stylesheet" href="../CSS/notice.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/abaout.css">
    <link rel="stylesheet" href="../CSS/home.css">


   



    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Navbar -->
     <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo"><img src="../IMAGES/Logo.jpeg" width="60" alt="Logo"></a>
            <ul class="navbar-menu">
                <li class="navbar-item"><a href= "../HTML/home.php" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="../HTML/notice.php" class="navbar-link">Notice</a></li>
                <li class="navbar-item"><a href="../HTML/about us.html" class="navbar-link">About</a></li>
                <li class="navbar-item"><a href="../HTML/gallery.html" class="navbar-link">Gallery</a></li>
                <li class="navbar-item"><a href="../HTML/contact.html" class="navbar-link">Contact</a></li>
                <?php
                if (isset($_SESSION['fullname'])) {
                    
echo '<li class="navbar-item"><a href="logout.php" class="navbar-link bg-danger">signout</a></li>';
                }else{
                    echo '<li class="navbar-item"><a href="login.php" class="navbar-link">signin</a></li>';
                    echo '<li class="navbar-item"><a href="signup.php" class="navbar-link">signup</a></li>';
                }
                
                ?>
            </ul>
        </div>
    </nav>


<br>
<br>

    


    <div class="container">
        <div class="table-header">
            <h2>Student <span>Details</span></h2>
            <form method="post" action="search-result.php">
                <div>
                    <input type="text" placeholder="Search User by name , email and contact number" title="Search User by name , email and contact number" aria-describedby="btnNavbarSearch" name="searchkey" />
                    <button id="btnNavbarSearch" type="submit" >SEARCH</button>
                </div>
            </form>
        </div>



<div style="overflow-x:auto;">
        <table class="student-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>NIC</th>
                    <th>Address</th>
                    <th>Tp Number</th>
                    <th>Course</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>


            <?php $ret=mysqli_query($conn,"select * from users");
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $row['fullname'];?></td>
                              <td><?php echo $row['email'];?></td>
                              <td><?php echo $row['nic'];?></td>
                              <td><?php echo $row['address'];?></td>
                              <td><?php echo $row['tpnumber'];?></td>
                              <td><?php echo $row['course'];?></td>
                              <td><?php echo $row['createdAt'];?></td>
                              <td>
                        <button class="btn edit-btn">Edit</button>
                        <button class="btn delete-btn">Delete</button>
                    </td>                                  
                              </tr>
                              <?php  }?>


                
            </tbody>

        </table>

        <table>
            
            
        </table>
        </div>
    </div>

    <footer>
        <div class="top">
            <h2>Starbright<span>U</span>ni</h2>
            <p>
                Starbright University is a prestigious educational institution renowned for its comprehensive academic programs and innovative research initiatives. Established in 1890, Starbright University has continuously evolved to become a leader in higher education, consistently attracting top talent and fostering a culture of excellence.

Over the years, Starbright University has expanded its campus and academic offerings through strategic investments and mergers. In 2005, the university merged with Horizon College, adding 20 new departments and 15 research centers. In 2010, Starbright acquired Innovation Institute, which brought state-of-the-art laboratories and cutting-edge technology programs to the university. More recently, in 2018, the acquisition of Global Tech University integrated 30 specialized programs and 10 international collaboration centers, significantly enhancing our global footprint and academic diversity.

With a commitment to providing a holistic educational experience, Starbright University continues to shape the future of education and research, preparing students to excel in an ever-changing world.


            </p>
        </div>
        <div class="social">
            <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://pinterest.com"><i class="fa-brands fa-pinterest-p"></i></a>
            <a href="https://reddit.com"><i class="fa-brands fa-reddit-alien"></i></a>
        </div>
        <div class="list">
            <ul>
               
                <li><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\FAQ.html">FAQ</a></li>
                <li><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\about us.html">About Us</a></li>
                <li><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\contact.html">Contact Us</a></li>
                <li><a href="http://localhost/movie-booking-system/php/feedback.php">Submit Your Feedback</a></li>
            </ul>
            <p class="copyright">
                All rights reserved &copy; College Uni 2022
            </p>
        </div>
    </footer>

    <script>
        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");

        function openFullImg(pic){
            fullImgBox.style.display="flex";
            fullImg.src = pic;
        }

        function closeFullImg(){
            fullImgBox.style.display="none";
        }
    </script>

</body>
</html>






