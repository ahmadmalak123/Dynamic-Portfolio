<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Ahmad's Site</title>
    <link rel="stylesheet" href="style/CVstyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e937dabe7a.js" crossorigin="anonymous"></script>

</head>
<!-- here starts the first section on the top -->
<div class="top-section">
    <img class="profile-pic" src="assets/ahmad.jpeg" alt="profile pic">
    <div class="top-right-div">
        <h1 class="name">Ahmad Malak</h1>
        <p class="title">Software Engineer</p>
    </div>
</div>
<div class="parent">
    <div class="second-section-left">
        <div>
            <h3>My Contact</h3>
            <hr>
            <div class="group">
                <i class="fa-regular fa-envelope"></i>
                <p class="inline-p">ahmad.mhd.malak@gmail.com</p>
            </div>
            <div class="group">
                <i class="fa-solid fa-phone"></i>
                <p class="inline-p">+961 70 045 344</p>
            </div>
            <div class="group">
                <i class="fa-solid fa-location-dot"></i>
                <p class="inline-p">Boulevard Street, Saida, Lebanon</p>
            </div>
        </div>
        <div>
            <h3>Software Skills</h3>
            <hr>
        
            <div class="group">
                <i class="fa-brands fa-java"></i>
                <p class="inline-p">Java Development</p>
            </div>

            <div class="group">
                <i class="fa-brands fa-python"></i>
                <p class="inline-p">Python Programming</p>
            </div>
            <div class="group">
                <div class="cpp">
                    <img class="edit-icon" src="assets/c.png" alt="C# logo">
                    <p class="inline-p">ASP.NET Core Web API/MVC </p>
                </div>
            </div>
            <div class="group">
                <i class="fa-brands fa-js"></i>
                <p class="inline-p">Html,CSS, and Javascript</p>
            </div>

            <div class="group">
                <i class="fa-solid fa-database"></i>
                <p class="inline-p">Databases</p>
            </div>
            
            <div class="group">
                <i class="fab fa-unity"></i>
                <p class="inline-p">Unity Game Development</p>
            </div>
          
            
        </div>
        <div>
            <h3>Soft Skills</h3>
            <hr>
            <ul>
                <li>Communication</li>
                <li>Problem-solving</li>
                <li>Teamwork</li>
                <li>Adaptability</li>
            </ul>
        </div>
        <div>
            <h3>Education Background</h3>
            <hr>
            <div class="group">
                <div style="min-width: 80%; ">
                    <p class="inline-p">- BS in Computer Science - Lebanese American University   <span style="font-weight:600;font-size:10.5px; color: #556B2F;">2021-2024</span>
                    </p>
                </div>
                <p class="inline-p remove-inline">- Distinction List with CGPA 3.5+</p>


            </div>      
        </div>
    </div>
    <div class="second-section-right">
        <div>
            <h3>About Me</h3>
            <hr>
            <div class="group">
                <p class="inline-p"> A computer science student at the Lebanese American University with strong technical skills in software
                    development (Python, Java, C#, SQL, Unity) and excellent communication and interpersonal abilities. Eager
                    to contribute considerable talents in support, development, implementation, data analytics, and
                    programming toward supporting a progressive organization in optimizing performance.
                </p>
            </div>      
        </div>
        <div>
            <h3>Professional Experience    </h3>
            <hr>
            <div  class="group">
                <h5>UNRWA Internship <span style="font-size: 10.5px ; color: #556B2F;">July 2023 - November 2023</span>
                </h5>
                <ul>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Developed ASP.NET MVC online course platform enabling user registration, enrollment, and content access.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Implemented secure user authentication and authorization features.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Collaborated on database design using Entity Framework Core for efficient data management.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Integrated responsive design and front-end technologies for optimal performance across devices.</li>
                    
                </ul>
            </div>      
            <div  class="group">
                <h5>Internship at Integrated Digital Systems  <span style="font-size: 10.5px ; color: #556B2F;">December 2023 - January 2024</span>
                </h5>
                <ul style="margin-bottom: 0;">
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">ASP.NET Core Web API backend for Activity Club Portal, enabling member registration, activity viewing, and profile management.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">JWT authentication for secure user login, ensuring data privacy and integrity.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Entity Framework Core for database schema design, defining activity schedules, user profiles, and memberships.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">CRUD operations for managing club activities, memberships, and profiles via RESTful API endpoints.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Swagger UI for API documentation, facilitating efficient exploration and testing.</li>
                    <li style="font-size:11px ;padding: 2px ; padding-top: 0;">Extensive testing and debugging for API reliability and performance optimization.</li>

                </ul>
            </div>          
        </div>
        
    </div>
</div>    



<!-- last section -->
<footer class="foot-section">
    <a href="Home.php?username=<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : ""; ?>">
        <div>Click here if you want to go back <?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : ""; ?></div>
    </a>
</footer>


