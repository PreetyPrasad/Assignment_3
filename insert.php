<?php
include 'Config.php';

if (isset($_POST['submit'])) {
    $product_name = $_POST['pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['pimage'];
    $image_ioc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $img_des = "uploadimage/" . $image_name;

    move_uploaded_file($image_ioc, $img_des);

    $product_category = $_POST['pages'];

    $query = "INSERT INTO `tblproduct`(`pname`, `Pprice`, `pimage`, `pCategory`) 
              VALUES ('$product_name', '$product_price', '$img_des', '$product_category')";

    if (mysqli_query($con, $query)) {
        echo "Product inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    header("Location: index1.php");
}
?>
