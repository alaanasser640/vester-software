<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/home-style.css" rel="stylesheet" />
    </head>
</head>

<body>

    <?php
    include "../includes/header.inc.php";
    ?>
    
    <!--Menu part-->
    
    <?php
    if (isset($_SESSION["id"]))
    {
    ?>
    <div class="menu-section" id="menu">
        <ul class="menu-list ">
            <li><a href="home.html">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Request Software</a></li>
           
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <?php
    }
    else
    {
    ?>
    <div class="menu-section" id="menu">
        <ul class="menu-list ">
            <li><a href="home.html">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Request Software</a></li>
            <li><a href="sign-up.php">Sign up</a></li>
            <li><a href="sign-in.php">Sign In</a></li>
            <li><a href="#" data-bs-target="#contact" data-bs-toggle="modal">Contact Us</a></li>
        </ul>
    </div>
    <?php
    }
    ?>

    <!--modal-->
    <div class="modal" tabindex="-1" id="contact">
        <div class="modal-dialog">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header ">
                    <div class="contact-header">
                        <p>Contact Us</p>
                        <h4>
                            GET IN TOUCH
                        </h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <h5>Name</h5>
                    <input type="text" placeholder="John Dawood" required/>
                    <h5>Email</h5>
                    <input type="email" placeholder="user_email@gmail.com" required />
                    <h5>Phone Number</h5>
                    <input type="text" placeholder="0123456789" required />
                    <h5>Message</h5>
                    <textarea placeholder="Leave your message here"></textarea>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!--First Section landing page-->
    <section class="land">
        <div class="land-text">
            <p class="intro">Indroducing Vester Software</p>
            <h2>
                <span class="pick-up">Pick Up A Save</span><br>
                And Trusty Software
            </h2>
            <p class="text">
                We are here to offer you a simple tools and softwares to simple your life and help you in your work.
                Your work is going
                to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is
                great work. And
                the only way to do great work is to love what you do.
            </p>
            <button class="shop-btn">
                Shop Now
            </button>
        </div>
        <div class="img-div">
            <img src="../img/1.png" alt="coding" class="first-img" />
        </div>
    </section>
    <!--Second Section About us-->
    <section class="about">

        <div class="image">
            <div class="make-img-center">
                <img src="../img/2.png" alt="vision" class="second-img" />
            </div>
        </div>

        <div>
            <div class="about-text">
                <p class="intro">About Us</p>
                <h3 class="about-title">
                    ” One day you will wake up and there won’t be any more time to do the things you’ve always wanted.
                    Do it
                    now.”
                </h3>
                <p class="text">
                    We are a team of programmers who seek to a big opportunity to increase the name of their software
                    company by selling
                    trusty and save softwares. Hope you enjoy shopping.
                </p>
                <button class="reverse-btn contact-btn">
                    Contact Us
                </button>
            </div>



    </section>
    <!--Third section -->
    <section class="products">
        <p class="intro">Get to know to us</p>
        <h2>Our Products</h2>
        <div class="main">
            
         <!-- the php code  -->
         <?php
                // includes
                    include "../Controllers/db.class.php";
                    include "../Controllers/homeContr.class.php";
                    include "../Views/homeView.class.php";
                // make an object fron the view
                    $home = new homeView();

                // call the method to show products
                
                    $home->showProducts();
                ?>



        </div>
        <div class="arrow">
            <a href="#">More Products</a>
        </div>
    </section>
    <!--Forth section-->
    <section class="request">
        <div class="land-text req-text">
            <p class="intro">Get to know new features </p>
            <h2>
                <span class="pick-up-edit">Make a Request for </span><br>
                your company software
            </h2>
            <p class="text">
                We are here to offer you a simple tools and softwares to simple your life and help you in your work.
                Your work is going
                to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is
                great work. And
                the only way to do great work is to love what you do.
            </p>
            <button class="reverse-btn">
                Learn More
            </button>
        </div>
        <div class="shad" style="margin-top: 30px;">

            <div class="make-img-center fixed-image">

            </div>

        </div>
    </section>
    <!--Fifth section-->
    <div style="text-align: center; padding-top: 50px;">
        <p class="intro">OUR TESTIMONIALS</p>
        <h2>Why They Recommend Us</h2>
    </div>
    <section class="review">

        <div class="backcolor">

        </div>
        <div id="carouselExampleCaptions" class="carousel " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="../img/4.png" class="d-block carousel-image " alt="man"
                        style="width: 100px;height: 100px; ">

                    <div class="stars">
                        <h5>Jack Dawood</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <p>
                            ''Awesome website. I bought a software to mange my clinic and it was super simple. <br>
                            Please, Choose yours carefully''
                        </p>
                    </div>

                </div>
                <div class="carousel-item ">

                    <img src="../img/6.png" class="d-block carousel-image " alt="woman">

                    <div class="stars">
                        <h5>Pola Benjamin</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <p>
                            '' Great website. I picked a software For my library and it was super easy
                            and simple. <br>I recommend it for you.''
                        </p>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left control"></i>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right control"></i>

            </div>

        </div>

    </section>

    <!--Footer-->
    <footer>
        <div>
            <h5>Navigate to</h5>
            <a href="home.html"> <i class="fas fa-caret-right"></i> Home </a>
            <a href="#"> <i class="fas fa-caret-right"></i> Products </a>
            <a href="../sign-up/sign-up.html"> <i class="fas fa-caret-right"></i> Sign up </a>
            <a href="#"><i class="fas fa-caret-right"></i> Reviews </a>
        </div>
        <div>
            <h5>Features</h5>
            <a href="#"><i class="fas fa-caret-right"></i> Sell Software </a>
            <a href="#"><i class="fas fa-caret-right"></i> Request Software </a>
            <a href="#"><i class="fas fa-caret-right"></i> Ask for Help </a>
            <a href="#"><i class="fas fa-caret-right"></i> Privacy Policy </a>
        </div>
        <div>
            <h5>Contact Us</h5>
            <a href="#"><i class="fas fa-paper-plane"></i> vestersoftware_2021@gmail.com </a>
            <a href="#"><i class="fas fa-phone-alt"></i> (+20)-1025635897</a>
            <div class="icons">
                <i class="fab fa-angellist" style="color: rgb(255, 232, 29);"></i>
                <i class="fab fa-facebook-f "></i>
                <i class="fab fa-twitter "></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <span>&copy;All Rights Reserved 2021-2022</span>
    </footer>


    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/home.js"></script>
</body>

</html>
