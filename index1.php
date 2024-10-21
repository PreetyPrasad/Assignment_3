<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="https://www.freeiconspng.com/uploads/sales-icon-7.png">
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


   
</head>
<body>


<!-- Main Content
 <center>
<div class="pp" >
    <br>
    <div style="background-color: #26004d; color:white"><h3>Product Details</h3></div>
    <br>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        
            <label><b>Product Name:</b></label><br>
            <input type="text" name="pname" class="form-control" style="width: 50%;" required><br>
        
        <div class="">
        <label><b>Product Price:</b></label><br>
            <input type="text" name="Pprice" class="form-control" style="width: 50%;" required>
        </div>
        <div class="">
        <label><b>Product Image:</b></label><br>         
            <input type="file" name="pimage" class="form-control"  style="width: 50%;">
        </div><br>
        <div class="">
        <label><b>Product Category:</b></label><br>        
            <select name="pages" class="form-select" style="width: 50%;">
                <option value="Home">Home</option>
                <option value="Laptop">Laptop</option>
                <option value="Bag">Bag</option>
                <option value="Mobile">Mobile</option>
            </select>

        </div>

        <br>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        <br>
        <br>
    </form>
</div>
</div> -->

    <!-- Product List Table -->
    <div class="container mt-4" style="width: 1300px; margin-left:18%;">
        <h1 class="text-center">Product List</h1>
        <td><a href="addproduct.php" class='btn '  style="background-color: #26004d; color:white; width:10%;">Add Product</a></td><br><br>

        <table class="table table-bordered"  >
            <thead  style="background-color: #26004d; color:white; width:10%;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'Config.php';
                $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
                while ($row = mysqli_fetch_array($Record)) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['pname']}</td>
                        <td>{$row['Pprice']}</td>
                        <td><img src='{$row['pimage']}' height='90px' width='80px'></td>
                        <td>{$row['pCategory']}</td>
                        <td><a href='delete.php?ID={$row['id']}' class='btn btn-danger'>Delete</a></td>
                        <td><a href='update.php?ID={$row['id']}' class='btn btn-primary'>Update</a></td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</center>

</body>
</html>
