<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>college uni</title>

    <link rel="stylesheet" href="C:\xampp\htdocs\IMBS WAD\CSS\navbar.css">
    
    <link rel="stylesheet" href="C:\xampp\htdocs\IMBS WAD\CSS\footer.css">
    
    <link rel="stylesheet" href="C:\xampp\htdocs\IMBS WAD\CSS\abaout.css">

    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
     <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo"><img src="F:/IMBS/Web engineering/Web site/IMAGES/Logo.jpeg" width="60" alt="Logo"></a>
            <ul class="navbar-menu">
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\home.php" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\notice.php" class="navbar-link">Notice</a></li>
                <li class="navbar-item"><a href="C:\xampp\htdocs\IMBS WAD\PHP\abaout.php" class="navbar-link">About</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\gallery.html" class="navbar-link">Gallery</a></li>
                <li class="navbar-item"><a href="C:\Users\MY PC\Desktop\WAD IMBS\HTML\contact.html" class="navbar-link">Contact</a></li>
                <li class="navbar-item"><a href="#" class="navbar-link">Profile</a></li>
            </ul>
        </div>
    </nav>

<!-- about  -->
<section class="about" id="about">
    <div class="container">
        <div class="content">
            <div class="text-box">
                <h2>About <strong>Us</strong></h2>
                <p><h3>
                    Starbright University has been at the forefront of education since its inception in [Year]. Our mission is to provide high-quality education and foster a vibrant learning environment where students can thrive academically and personally. With a diverse range of programs and a commitment to excellence, we prepare our students to be leaders in their fields.
                </h3></p>
                <h1>Our History</h1>
                <p><h3>
                    Founded in [Year], Starbright University has grown from a small institution to a renowned university with multiple campuses and a rich history of academic achievements. Over the years, we have expanded our curriculum, enhanced our facilities, and attracted top-tier faculty to provide our students with a comprehensive educational experience.
                </h3></p>
                <h1>Our Vision</h1>
                <p><h3>
                    Our vision is to be a global leader in education, research, and innovation. We aim to inspire our students to reach their full potential and make significant contributions to society. Through cutting-edge research, community engagement, and a commitment to diversity and inclusion, we strive to create a better future for all.
                </h3></p>
                <h1>Our Campus</h1>
                <p><h3>
                    Our campus is equipped with state-of-the-art facilities, including modern classrooms, advanced laboratories, and extensive libraries. We provide a supportive and inclusive environment where students can engage in various extracurricular activities, from sports to cultural events, ensuring a well-rounded university experience.
                </h3</p>
              

                          </div>
            <div class="image-box">
                <img src="C:\Users\MY PC\Desktop\WAD IMBS\IMAGES\new bg 2.jpeg" alt="About Our Game">
            </div>
        </div>
    </div>
</section>
  <!-- end abouts -->



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
               
                <li><a href="http://localhost/movie-booking-system/html/faq.html">FAQ</a></li>
                <li><a href="http://localhost/movie-booking-system/html/about-us.html">About Us</a></li>
                <li><a href="http://localhost/movie-booking-system/php/contactus.php">Contact Us</a></li>
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