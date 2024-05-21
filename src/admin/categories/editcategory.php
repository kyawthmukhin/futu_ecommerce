<?php
    include_once __DIR__. '/../../layout/header.php';
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $category_controller = new CategoryController();
    $id = $_GET['id'];

    $edit_id = $category_controller->get_edited_id($id);
    

    if(isset($_POST['update_category'])) {
        $error = false;
        if(!empty($_POST['categoryname'])) {
            $category_name = $_POST['categoryname'];
        }else {
            $error = true;
            echo $category_name_error = "You need to fill the category to update";
        }
        if(!$error) {
            $category_controller->update_category_name($category_name,$id);
            $edit_id['name'] = ' ';
        }
    }

?>

<div class="max-w-md mx-auto">
        <h1 class="text-3xl pt-14 pb-10"><i class='fa-regular fa-pen-to-square px-2'></i>Edit category</h1>
        <div class="bg-palegray-0 rounded-e-md shadow-lg shadow-slate-500">
            <form method="post">
                <div class="px-12 pt-8">
                    <label for="" class="w-full block mb-5 text-[20px] font-semibold">Category Name * </label>
                    <input type="text" name="categoryname" class="w-full border border-gray-400 block p-2 rounded-md" id="" value="<?php echo $edit_id['name'] ?>">
                    <span class="text-red-500 mt-2"><?php if(isset($category_name_error)) echo $category_name_error ?></span>
                </div>
                <div class="flex items-center justify-between pt-10 pb-16 px-5">
                    <div>
                        <button name='update_category' class="bg-purple-800 border border-purple-800 text-white py-3 px-2 rounded-md ms-8">Update</button>
                    </div>
                    <div>
                        <a href="./index.php" class=" bg-transparent border border-black py-3 px-2 rounded-md me-8">Back to Category</a>
                    </div>
                </div>
            </form>
        </div>
</div>


<?php
    include_once __DIR__. '/../../layout/footer.php';
?>