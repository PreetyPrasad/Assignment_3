<?php
include 'Config.php';

// Check if ID is provided in the URL
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    
    // Fetch the product details from the database
    $query = "SELECT * FROM `tblproduct` WHERE id = $id";
    $result = mysqli_query($con, $query);
    
    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result); // Fetch the product data
    } else {
        die("Product not found: " . mysqli_error($con));
    }
} else {
    die("ID not provided in the URL!");
}

// Handle the form submission
if (isset($_POST['update'])) {
    $product_name = $_POST['pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['pimage'];
    $image_ioc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];

    // Handle image upload
    if ($image_name) {
        $img_des = "uploadimage/" . $image_name;
        move_uploaded_file($image_ioc, $img_des);
    } else {
        // Use the existing image if no new image is uploaded
        $img_des = $data['pimage'];
    }

    $product_category = $_POST['pages'];

    // Update the product details in the database
    $query = "UPDATE `tblproduct` SET `pname`='$product_name', `Pprice`='$product_price', `pimage`='$img_des', `pCategory`='$product_category' WHERE id = $id";

    if (mysqli_query($con, $query)) {
        echo "Product updated successfully!";
        header("Location: index1.php"); // Redirect to index page after update
        exit();
    } else {
        echo "Error updating product: " . mysqli_error($con);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-left: 30%; width:50%;">
        <h2 class="text-center">Update Product</h2>
        <form action="update.php?ID=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Product Name:</label>
                <input type="text" name="pname" value="<?php echo $data['pname']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Product Price:</label>
                <input type="text" name="Pprice" value="<?php echo $data['Pprice']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Product Image:</label>
                <input type="file" name="pimage" class="form-control">
                <br>
                <img src="<?php echo $data['pimage']; ?>" height="100" width="100">
            </div>
            <div class="mb-3">
                <label>Product Category:</label>
                <select name="pages" class="form-select" required>
                    <option value="<?php echo $data['pCategory']; ?>"><?php echo $data['pCategory']; ?></option>
                    <option value="Garments">Garments</option>
                <option value="mobile">mobile</option>
                <option value="Laptop">Laptop</option>
               
                </select>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
