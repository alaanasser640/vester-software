

<?php
session_start();
if(isset($_POST['add_product']))
    {

        // get the data from the user

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $discount = $_POST['discount'];
        $image = $_FILES['image'];
        $thumbnails = $_FILES['thumbnail'];
        $file = $_FILES['file'];


       print_r($thumbnails);
        
        
        // // includes
        // include "../../Controllers/db.class.php";
        // include "../../Controllers/AdminContr.class.php";
        // include "../../Views/AdminView.class.php";


        // $add  = new AdminView();

        // $add->setProduct($name,$description,$price,$category,$discount,$image, $thumbnail, $file);

        // header("location: ../add-product.php?AddedSuccefully");
}
