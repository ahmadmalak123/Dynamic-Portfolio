<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Gallery</title>
    <link rel="stylesheet" href="style/Hstyle.css">
    <link rel="stylesheet" href="style/icons.css">


    <script src="https://kit.fontawesome.com/e937dabe7a.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="row right-content" id="header">
        <!-- Display Welcome message if user is logged in -->
        <?php
        session_start();
        if (isset($_SESSION["username"])) {
            echo '<span id="welcome-msg" style="font-size: 24px; font-weight: bold; color: #000000; margin-right: 20px;">Welcome, ' . $_SESSION["username"] . '</span>';
        }
        ?>
        <div id="dropdown-menu">
            <span>MENU<i class="ico menu-ico"></i></span>
            <div class="dropdown-content menu-rtl">
                <ul>
                    <a href="#Home">
                        <li><i class="ico ico-l png4-ico"></i>Home</li>
                    </a>
                    <a href="#Gallery">
                        <li><i class="ico ico-l png1-ico"></i>Gallery</li>
                    </a>
                    <a href="cv.php?username=<?php echo $_SESSION["username"]; ?>">
                        <li><i class="ico ico-l png2-ico"></i>Profile</li>
                    </a>
                    <a href="#Contact">
                        <li><i class="ico ico-l png3-ico"></i>Contact Us</li>
                    </a>
                    <!-- Display logout option if user is logged in -->
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo '<a href="be/logout.php"><li>Logout</li></a>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <section id="Home">
        <br>
        <div class="home">
            <p> A computer science student at the Lebanese American University with strong technical skills in software
                development (Python, Java, C#, SQL, Unity) and excellent communication and interpersonal abilities. Eager
                to contribute considerable talents in support, development, implementation, data analytics, and
                programming toward supporting a progressive organization in optimizing performance.
            </p>
            <img src="../DynamicPortfolio/style/images/ahmad.jpeg" alt="">

        </div>
        <section id="Gallery">
    <div class="container">
      <h1>My Football Team Gallery</h1>
      <div class="row">
        <?php
        $json_data = file_get_contents("gallery.json");
        $galleryImages = json_decode($json_data, true);

        foreach ($galleryImages as $image) {
            echo '<div class="imgs">';
            echo '<a href="#' . $image["id"] . '">';
            echo '<img src="' . $image["src"] . '" alt="' . $image["alt"] . '" />';
            echo '</a>';
            echo '</div>';
        }
        ?>
      </div>
    </div>
    
    <?php
    foreach ($galleryImages as $image) {
        echo '<div id="' . $image["id"] . '" class="overlay">';
        echo '<a href="#" class="close-btn">&times;</a>';
        echo '<img src="' . $image["src"] . '" class="overlay-img" />';
        echo '</div>';
    }
    ?>
  </section>
  
  <section id="Contact">
    <div class="foot">
        <h4>CONTACT US</h4>
        <div class="containerf">
            <div class="group">
                <i class="far fa-envelope"></i>
                <p class="inline-p">ahmad.mhd.malak@gmail.com</p>
            </div>
            <div class="group">
                <i class="fas fa-phone"></i>
                <p class="inline-p">+961 70 045 344</p>
            </div>
            <div class="group">
                <i class="fas fa-map-marker-alt"></i>
                <p class="inline-p">Boulevard Street, Saida, Lebanon</p>
            </div>
        </div>
    </div>
</section>

</div>
</body>
</html>