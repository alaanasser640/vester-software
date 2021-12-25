<?php
session_start();

// includes
include "../Controllers/db.class.php";
include "../Controllers/ProductsContr.class.php";
include "../Controllers/WishListContr.class.php";
include "../Views/ProductsView.class.php";
include "../Views/WishListView.class.php";
// make an object from the view
$proView = new productView();
$wishlist = new WishListView();

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
        <link href="css/products-style.css" rel="stylesheet" />
    </head>
</head>

<body>

 
<!--header-->
        <?php
            $wishlist->ShowMessage();

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
                        <li><a href="products.php">Products</a></li>
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
                        <li><a href="products.php">Products</a></li>
                        <li><a href="#">Request Software</a></li>
                        <li><a href="sign-up.php">Sign up</a></li>
                        <li><a href="sign-in.php">Sign In</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <?php
                }
                ?>
    <!--Landing section-->

    <section class="software-room">
        <h3>
            SOFTWARE<span>&#9679;</span>ROOM
        </h3>
    </section>
    <section class="parent">
        
        <div class="side">
            <div class="shop">
                SHOP BY
            </div>
            <div class="category">
                <p> CATEGORY </p><span data-bs-toggle="collapse" href="#cat" aria-expanded="true" aria-controls="cat"
                    onclick="appear()"><i class="fas fa-ellipsis-v"></i></span>
            </div>
            <div class="list" id="cat">

                <ul>
                    <li class="all-lists" data-bs-toggle="collapse" href="#os" aria-expanded="true" aria-controls="os" onclick="change1()" >
                        <i class="fas fa-chevron-down a rotate"></i> Operating System
                    </li>
                    <ul id="os">
                        <li><input type="checkbox" id="mac" class="checkboxClick Operating_System" value="support_mac"  /><label for="mac">&nbsp;MAC</label></li>
                        <li><input type="checkbox" id="linux" class=" checkboxClick Operating_System" value="support_linux" /><label for="linux">&nbsp;Linux</label></li>
                        <li><input type="checkbox" id="window" class=" checkboxClick Operating_System" value="support_windows"/><label for="window">&nbsp;Windows</label></li>
                    </ul>
                </ul>


                <ul>
                    <li class="all-lists " data-bs-toggle="collapse" href="#lang" aria-expanded="false"
                        aria-controls="lang"onclick="change3()" ><i class="fas fa-chevron-down c rotate"></i>
                        Categories</li>
                    <ul id="lang">
                        <?php 
                            $proView->ShowCategories()
                        ?>
                    </ul>
                </ul>
            </div>

        </div>
        <div class="main">
            <div class="d-flex p-0 search">
                <input class="form-control searchInput" type="text" placeholder="Search For Software"
                    style="padding: 21px;border-radius: 0;">
                <span class="search-span"><i class="fas fa-search"></i></span>
            </div>
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';" class="bread">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
            <div class="parent-product">
            <!-- the php code  -->
                    <?php
                    

                    // call the method to show products
                    
                        $proView->showProducts();
                    ?>
            </div>
        </div>
    </section>

















    <!--Footer -->
    <footer>
        <div>
            <h5>Navigate to</h5>
            <a href="../home/home.html"> <i class="fas fa-caret-right"></i> Home </a>
            <a href="../products/products.html"> <i class="fas fa-caret-right"></i> Products </a>
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
    <script src="js/products.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/search&filter-ajax.js"></script>

</body>

</html>

