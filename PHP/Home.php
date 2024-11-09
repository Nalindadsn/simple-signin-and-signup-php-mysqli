<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Starbright University</title>
    <link rel="stylesheet" href="C:\Users\MY PC\Desktop\WAD IMBS\css\gallery.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\IMBS WAD\CSS\navbar.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\IMBS WAD\CSS\footer.css">
    <link rel="stylesheet" href="C:\Users\MY PC\Desktop\WAD IMBS\css\abaout.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\IMBS WAD\CSS\home.css">
    <link rel="stylesheet" href="C:\Users\MY PC\Desktop\WAD IMBS\css\contact us.css">
    <link rel="stylesheet" href="C:\Users\MY PC\Desktop\WAD IMBS\css\notice.css">



    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
     <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo"><img src="C:\xampp\htdocs\IMBS WAD\Logo.jpeg" width="60" alt="Logo"></a>
            <ul class="navbar-menu">
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\home.php" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\notice.php" class="navbar-link">Notice</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\about us.html" class="navbar-link">About</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\gallery.html" class="navbar-link">Gallery</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\contact.html" class="navbar-link">Contact</a></li>
                <li class="navbar-item"><a href="#" class="navbar-link">Profile</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="content">
                <div class="text-box">
                    <h1>WELCOME TO STARBRIGHT UNIVERSIY</h1>
                    <p>At Starbright University, we strive to provide world-class facilities and infrastructure to help students achieve their aspirations. Our professional faculty members offer the best learning experiences with detailed video lectures, creative approaches, and extensive resources.</p>
                    <div class="buttons">
                        <a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\about us.html" class="btn">Read More</a>
                        <a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\login.html" class="btn">    Start</a>
                    </div>
                </div>
                <div class="image-box">
                    <img src="C:\Users\MY PC\Desktop\WAD IMBS\IMAGES\new bg 1.jpeg" alt="Mind Educations">
                </div>
            </div>
        </div>
    </section>

<!---------------------------------------------------------->

<div class="box-container">
    <div class="box">
        <img src="F:/IMBS/Web engineering/Web site/IMAGES/Bisuness.jpeg" alt="">
        <div class="info">
            <h2><i>Business</i></h2>
            <a href=" " class="btn">Learn More</a>
        </div>
    </div>
    <div class="box">
        <img src="F:/IMBS/Web engineering/Web site/IMAGES/eng.jpeg" alt="">
        <div class="info">
            <h2><i>Engineering</i></h2>
            <a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\FOE.html " class="btn">Learn More</a>
        </div>
    </div>
    <div class="box">
        <img src="F:/IMBS/Web engineering/Web site/IMAGES/it.jpeg" alt="">
        <div class="info">
            <h2><i>Computing</i></h2>
            <a href=" " class="btn">Learn More</a>
        </div>
    </div>
</div>

    <!-- Footer -->
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
