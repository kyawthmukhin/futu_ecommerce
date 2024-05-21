<?php
    session_start();
    include_once('../controller/categoriescontroller.php');
    $category_controller = new CategoryController();


    $categories = $_SESSION['category_items'];
    echo "<pre>";
        print_r($categories);
    echo "</pre>";

    $items = $category_controller->selected_category_items($categories);
    echo "<pre>";
    print_r($items);
    echo "</pre>";

?>