<?php
include 'Config.php';

$id = $_GET['ID'];

$query = "DELETE FROM `tblproduct` WHERE id = $id";

if (mysqli_query($con, $query)) {
    echo "Product deleted successfully!";
} else {
    echo "Error deleting product: " . mysqli_error($con);
}

header("Location: index.php");
?>
