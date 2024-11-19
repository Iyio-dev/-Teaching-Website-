<?php
    $run = true;
    session_start();
    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if ($run){
            $query = "insert into form (name, email, phone) values('$name', '$email', '$phone')";


            mysqli_query($con, $query);

            echo "<script>alert('Sucessfully Registered')</script>";
        }else{
            echo "<script>alert('Enter Some Valid Information')</script>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body onscroll="changescrolltop()">

    <header id="header" >

        <a href="#" class="logo"><i class="fas fa-graduation-cap"></i>apex tutors</a>

        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#teacher">teachers</a></li>
                <li><a href="#course">course</a></li>
                <li><a href="#review">review</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <a class="signup-btn" href="signup.php">Sign Up</a>
        <a class="signup-btn" href="login.php">Log In</a>
        <div class="fas fa-bars" onclick="openMenu()" id="openbtn"></div>
        <div class="fas fa-times" onclick="closeMenu()" id="closebtn"></div>
    </header>
    <section class="home" id="home">
        <div class="content">
            <h1>Learn programming online from home</h1>
            <p>
                You can get yourself programming and coding skills by applying for our various courses which can be helpful and can make you  to become a skillful and developed programmer 
            </p>
            <a href="#"><button>discover more</button></a>
        </div>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <h3>trending courses</h3>
                <p>We offer various trending and enriching courses like Web development</p>
            </div>

            <div class="box">
                <i class="fas fa-fire"></i>
                <h3>cash making <br>innovations</h3>
                <p>we also offer links to real life well paying jobs</p>
            </div>

            <div class="box">
                <i class="fas fa-award"></i>
                <h3>certifications</h3>
                <p>we give certificates to every student who sucessfully completed our course</p>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <h1 class="heading">about us</h1>
        <h3 class="title">start your journey with us
        </h3>
        <div class="row">
            <div class="content">
                <h3>start your journey to a realm of coding abilities</h3>
                <p>we can help you boost your coding and programming skills by our various useful and exciting lectures and self-explanatory notes. we can also help by testing your ability by giving exercises which can help build confidence about being an exemplary programmer amomg peers. we also help to solve your coding errors which may be difficult for you. we give the best of services to you and we are happy doing that.</p>
                <a href="#"><button>learn more</button></a>
            </div>
            <div class="image">
                <img src="about-img.png">
            </div>
        </div>
    </section>
    <section id="teacher" class="teacher">
        <h1 class="heading">our tutors</h1>
        <h3 class="title">meet professional tutors</h3>

        <div class="card-container">
            <div class="card">
                <img src="img1.png">
                <h3>Iyiola Ajibola D.</h3>
                <p>i love teaching</p>
                <div class="icons">
                    <a href="#" class="fa-facebook"></a>
                    <a href="#" class="fa-twitter"></a>
                    <a href="#" class="fa-github-alt"></a>
                    <a href="#"></a>
                </div>
            </div>
            <div class="card">
                <img src="img2.png">
                <h3>Osungbure Feranmi P.</h3>
                <p>i love teaching</p>
                <div class="icons">
                    <a href="#" class="fa-facebook"></a>
                    <a href="#" class="fa-twitter"></a>
                    <a href="#" class="fa-github-alt"></a>
                    <a href="#"></a>
                </div>
            </div>
        
        </div>
    </section>
    <section class="course" id="course">

        <h1 class="heading">our courses</h1>
        <h3 class="title">upgrade your skills with newest courses</h3>

        <div class="box-container">

            <div class="box">
                <i class="fab fa-html5"></i>
                <h3>front-end web development</h3>
                <p>we offer front-end web development course using HTML5 and CSS3 with visual studio code.</p>
                <p style="color: red;
                padding-bottom: 20px;">registration ongoing and ends december 10 and classes starts december 1</p>
                <button class="btn"><a href="signup.php">Apply</a></button>
            </div>
            <div class="box">
                <i class="fab fa-css3-alt"></i>
                <h3>back-end web development</h3>
                <p>we offer back-end web development course using PHP, PYTHON Django framework and Javascript with visual studio code</p>
                <p style="color: red;
                padding-bottom: 20px;">registration ongoing and ends december 10 and classes starts december 1</p>
                <button class="btn"><a href="signup.php">Apply</a></button>
            </div>
            <div class="box">
                <i class="fab fa-js-square"></i>
                <h3>machine learning and data science</h3>
                <p>we offer machine learning and data science course using PYTHON, excel and power BI.</p>
                <p style="color: red;
                padding-bottom: 20px;">coming soon..... </p>
                <button class="btn"><a href="signup.php">Apply</a></button>
            </div>
            <div class="box">
                <i class="fas fa-code"></i>
                <h3>mobile app development</h3>
                <p>we offer mobile app development using flutter and dart with android studio and visual code.</p>
                <p style="color: red;
                padding-bottom: 20px;">coming by january 1. </p>
                <button class="btn"><a href="signup.php">Apply</a></button>
            </div>
            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <h3> Java app development</h3>
                <p>we offer java app development courses using java with netbeans </p>
                <p style="color: red;
                padding-bottom: 20px;">Comming january 1</p>
                <button class="btn" style="width: 120px;
                                            height: 40px;
                                            background-color: var(--pink);
                                            color: var(--violet);
                                            margin-bottom: 30px;
                                            outline: 0;
                                            border: 0;
                                            border-radius: 5px;"><a href="signup.php" style="color: #fff;">Apply</a></button>
            </div>
        </div>
    </section>
    <section class="review" id="review">
        <h1 class="heading">student review</h1>
        <h3 class="title">what our student says about us</h3>

        <div class="box-container">

            <div class="box">
                <img src="pic1.png">
                <h3>agbaje david</h3>eli
                <p>I love their services, they provide professional and efficient teaching methods</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="box">
                <img src="pic2.png">
                <h3>egbeleke iyanuoluwa</h3>
                <p>They are really nice and very good. their explanations and quick notes are very helpful.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="box">
                <img src="pic3.png">
                <h3>odutoye daniel</h3>
                <p>i like their services especially the web programming. we built a lot of websites together.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">

        <h1 class="heading">contact us</h1>
        <h3 class="title">we love conversations, let's talk</h3>

        <div class="row">


            <div class="image">
                <img src="contact-img.png" alt="">
            </div>
        <div class="form-container">
                <form method="POST">
                    <input type="text" placeholder="full name" id="transform" onfocus="scroll()" name="name">
                    <input type="email" placeholder="enter your email" id="transform" name="email">
                    <input type="number" placeholder="phone" id="transform" name="phone">
                    <input type="text" placeholder="write your message" id="transform" onfocus="scroll()" name="message">
                    <input type="submit" value="message">
                </form>
            </div>
        </div>  
    </section>
    <section class="copyright">copyright © DevaPet Inc. 2024</section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>
</html>