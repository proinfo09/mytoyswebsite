<?php
    include('productCRUD.php');
    $obj = new ProductCRUD;
    $obj->deleteProduct($_GET['code']);
    header('Location: index.php');
?>