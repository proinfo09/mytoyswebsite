<?php
 include ('productCRUD.php');

 if(isset($_POST['add'])) {
     $obj = new productCRUD();
     $success = $obj -> createProduct ($_POST['code'], $_POST['image'], $_POST['name'], $_POST['price'], $_POST['details'] );
     header ('Location: index.php');

 }
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Thien An</title>
</head>
<body>
    <a href="insert.php" class="text-decoration-none">
        <h3 class="text-success p-3 ">AddNew</h3>
    </a>
    <p>Test3</p>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Name </th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Details</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <?php
            include('productCRUD.php');
            $obj = new ProductCRUD();
            $list = $obj->readProduct();
            foreach ($list as $item) {
            ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $item["code"] ?> </td>
                        <td class="text-center"><?php echo $item["name"] ?> </td>
                        <td class="text-center"><?php echo $item["price"] ?> </td>
                        <td class="text-center"><img src="assets\<?= $item["img"] ?> " width="241" height="135" /></td>
                        <td class="text-center"><?php echo $item["details"] ?> </td>
                        <td class="text-center"><a href="#"><button type="button" class="btn btn-secondary">Update</button></a> &nbsp; | &nbsp; <a href="delete.php?code1=<?= $item["code"] ?>"><button type="button" class="btn btn-danger">Delete</button></a> </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>