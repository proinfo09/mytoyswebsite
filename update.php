<?php
 include ('productCRUD.php');
 if(isset($_POST['update'])) {
     $obj = new productCRUD();
     $success = $obj -> updateProduct($_POST['code'], $_POST['name'], $_POST['price'], $_POST['image'], $_POST['details'] );
     header ('Location: index.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Update Toy</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="code">Product Code:</label>
            <input type="number" class="form-control" id="code" placeholder="Enter code" name="code" VALUE = <?php echo $_GET['code1'] ?>readonly>
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  VALUE = <?php echo $_GET['name'] ?>>
            <label for="name">Product Price:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter price" name="price"  VALUE = <?php echo $_GET['price'] ?>>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" name="image"  VALUE = <?php echo $_GET['image'] ?>>
            </div>
            <label for="name">Product details:</label>
            <input type="text" class="form-control" id="details" placeholder="Enter details" name="details"  VALUE = <?php echo $_GET['details'] ?>>
            <button type="submit" class="btn btn-primary" name="update">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>
</html>