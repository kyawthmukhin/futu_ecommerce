<?php
    include_once __DIR__. '/../../layout/header.php';
    include_once __DIR__. '/../../controller/subcategorycontroller.php';
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $category_controller = new CategoryController();
    $categories=  $category_controller->get_category();

    $id = intval($_GET['id']);
    $category_id = intval($_GET['cate_id']);
    $subcategory_controller = new SubCategoryController();
    $subcategory_id = $subcategory_controller->get_subcategory_id($id, $category_id);
    if(isset($_POST['update_category'])) {
        $error = false;
        if(!empty($_POST['category_name'])) {
            $category_id = $_POST['category_name'];
        }else {
            $error = true;
        }
        if(!empty($_POST['subcategory_name'])) {
            $subcategory_name = trim(strtolower($_POST['subcategory_name']));
        }else {
            $error = true;
            $subcategory_name_error = "Please fill your subcategory name";
        }
        if(!$error) {
            $subcategory_controller->update_subcategory_id($category_id,$subcategory_name,$id);
        }
    }

?>
<div>
<div class="max-w-md mx-auto">
        <h1 class="text-3xl pt-14 pb-10"><i class='fa-regular fa-pen-to-square px-2'></i>Edit Subcategory</h1>
        <div class="bg-palegray-0 rounded-e-md shadow-lg shadow-slate-500">
            <form method="post">
                <div class="px-12 pt-8">
                    <option value=""></option>
                    <label for="" class="w-full block mb-5 text-[20px] font-semibold">Category Name * </label>
                    <select name="category_name" id="" class="w-full border border-gray-400 block p-2 rounded-md">
                        <?php 
                            foreach($categories as $category) {
                               echo '<option value="'. $category['id'] .'"';
                               if($category['id'] == $subcategory_id['category_id']) {
                                    echo 'selected';
                               }
                               echo '>';
                               echo $category['name'];
                               echo '</option>';
                            }
                            
                        ?>      
                    </select>
                </div>
                <div class="px-12 mt-4">
                    <label for="" class="w-full block mb-5 text-[20px] font-semibold">Subcategory Name * </label>
                    <input type="text" name='subcategory_name' class="w-full border border-gray-400 block p-2 rounded-md" value="<?php echo $subcategory_id['name'] ?>">
                    <span class="text-red-500"><?php if(isset($subcategory_name_error)) echo $subcategory_name_error?></span>
                </div>
                <div class="flex items-center justify-between pt-10 pb-16 px-5">
                    <div>
                        <button name='update_category' class="bg-purple-800 border border-purple-800 text-white py-3 px-2 rounded-md ms-8">Update</button>
                    </div>
                    <div>
                        <a href="./index.php" class=" bg-transparent border border-black py-3 px-2 rounded-md me-8">Back to Subcategory</a>
                    </div>
                </div>
            </form>
        </div>
</div>
</div>

<?php
    include_once __DIR__. '/../../layout/footer.php';

?>