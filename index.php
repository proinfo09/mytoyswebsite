<button type="submit" class="btn btn-primary" name= "add" formaction="/mywebsite/insert.php">Add New</button>
<!doctype html>
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
    <!--<a href="/mywebsite/insert.php">AddNew</a>-->
    <div>
    <div class="container">
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image </th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
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
                        <?php foreach ($item as $key => $value) { ?>
                            <td><?php echo $value ?> </td> <?php } ?>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-success">Delete</button>
                        </td>
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