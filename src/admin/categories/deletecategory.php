<?php
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $deleted_id = $_GET['id'];

    $category_controller = new CategoryController();

    $category_controller->delete_category($deleted_id);
    // header('location:index.php?status=fail');

?>

