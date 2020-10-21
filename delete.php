<?php
    include('productCRUD.php');
    $obj = new productCRUD();
    $obj->deleteProduct($_GET['code1']);
    header('Location: index.php');
?>