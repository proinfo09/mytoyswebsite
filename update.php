<?php
 include ('productCRUD.php');
 $obj = new productCRUD();
 $obj -> updateProduct ($_GET['code2'], $_POST['image1'], $_POST['name1'], $_POST['price1'], $_POST['details1'] );
 header ('Location: index.php');
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
  <h2>Update item</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="name">Product image:</label>
    <input type="text" class="form-control" id="image1" placeholder="Enter image" name="image1">
    <label for="name">Product name:</label>
    <input type="text" class="form-control" id="name1" placeholder="Enter name" name="name1">
    <label for="name">Product price:</label>
    <input type="text" class="form-control" id="price1" placeholder="Enter name" name="price1">
    <label for="name">Product detail:</label>
    <input type="text" class="form-control" id="details1" placeholder="Enter details" name="details1">
    <button type="submit" class="btn btn-primary">update</button>
  </form>
</div>

</body>
</html>