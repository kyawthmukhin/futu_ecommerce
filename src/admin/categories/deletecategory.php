<?php
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $deleted_id = $_GET['id'];

    $category_controller = new CategoryController();

   $status =  $category_controller->delete_category($deleted_id);
   if($status == true) {
        header('Location: ./index.php?cate_delete_status=true');
        exit;
   }else {
        header('Location: ./index.php?cate_delete_status=false');
        exit;
   }
    // header('location:index.php?status=fail');

?>

