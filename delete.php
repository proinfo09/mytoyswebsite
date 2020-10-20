<?php
    include('productCRUD.php');
    $obj = new ProductCRUD;
    $obj->deleteProduct($_GET['code1']);
    header('Location: index.php');
?>