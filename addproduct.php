
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
<style>
.pp{
    box-sizing: border-box;
    width: 800px;
    background-color: white;
    border-radius: 10px;
}
.form-control{
    width:50%;
}
</style>

</head>
<body>
<center>
<div class="pp" >
    <br>
    <div style="background-color: #26004d; color:white"><h3>Product Details</h3></div>
    <br>
    <br> <td><a href="index.php" class='btn '  style="background-color: #26004d; color:white; width:20%;">BACK </a></td><br><br>
    <br><br>
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
                <option value="Home">Garments</option>
                <option value="Laptop">Mobile</option>
                <option value="Bag">Laptop</option>
               
            </select>

        </div>

        <br>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        <br>
        <br>
    </form>
</div>
</div>
     
</body>
</html>