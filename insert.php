<?php
 include ('productCRUD.php');

 if(isset($_POST['add'])) {
     $obj = new productCRUD();
     $success = $obj -> createProduct ($_POST['code'], $_POST['image'], $_POST['name'], $_POST['price'], $_POST['details'] );
     header ('Location: index.php');

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add New Toy</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="code">Product Code:</label>
    <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
    <label for="name">Product image:</label>
    <input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
    <label for="name">Product name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    <label for="name">Product price:</label>
    <input type="text" class="form-control" id="price" placeholder="Enter name" name="price">
    <label for="name">Product detail:</label>
    <input type="text" class="form-control" id="detail" placeholder="Enter detail" name="details">
    <button type="submit" class="btn btn-primary" name= "add">Add New</button>
  </form>
</div>


</body>
</html>