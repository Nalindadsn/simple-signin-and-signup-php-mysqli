<?php 

include '../phpHandlers/config.php';

 ?>
<html lang="en">
    <head>
        <title>Manage Users </title>
             <link rel="stylesheet" type="text/css" href="css/style.css">

             <link rel="stylesheet" href="../CSS/contact us.css">
    <link rel="stylesheet" href="../CSS/notice.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/abaout.css">
    <link rel="stylesheet" href="../CSS/home.css">



    </head>
    <body>    <!-- Navbar -->
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
    <div class="container mt-5">
    <h1>Registered Users
    </h1>
                    <div>
                        
<form method="post" action="search-result.php">
                <div>
                    <input type="text" placeholder="Search User by name , email and contact number" title="Search User by name , email and contact number" aria-describedby="btnNavbarSearch" name="searchkey" />
                    <button id="btnNavbarSearch" type="submit" >SEARCH</button>
                </div>
            </form>
            <div></div>


            <h3>Search Results</h3>
            <h5>Search Results against keyword '<?php echo $_POST['searchkey'];?>'</h5>
                        <div>
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
<?php 
$searchkey=$_POST['searchkey'];
$ret=mysqli_query($conn,"select * from users where (fullName like '%$searchkey%' || email like '%$searchkey%' || tpnumber like '%$searchkey%')");
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
                            </div>
                        </div>
                    </div>
      </div>
    </body>
</html>
