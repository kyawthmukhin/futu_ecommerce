<?php
    include_once __DIR__. '/../../controller/subcategorycontroller.php';
    $subcategory_controller = new SubCategoryController();
    $del_id = intval($_GET['id']);
   $del_status = $subcategory_controller->delete_subcategory_id($del_id);

   if($del_status) {
        header('location:./index.php?subcat_delstatus=true');
        exit();
   }else {
        header('location:./index.php?subcat_delstatus=false');
        exit();
   }



    

?>