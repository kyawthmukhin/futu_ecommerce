<?php
    include_once __DIR__. '/../../layout/header.php';
    include_once __DIR__. '/../../controller/subcategorycontroller.php';
    include_once __DIR__. '/../../controller/categoriescontroller.php';

    $categoryController = new CategoryController();
    $categories = $categoryController->get_category();

    $subcategoryController = new SubCategoryController();
    $subcategories = $subcategoryController->get_subcategory();


    if(isset($_POST['add_category'])) { 
        $error = false;
        if(!empty($_POST['category'])) {
            $category = trim(strtolower($_POST['category']));
        }else {
            $error = true;
            $select_category_error = "Please select category";
        }
        if(!empty($_POST['subcategory'])) {
            $subcategory = trim(strtolower($_POST['subcategory']));
        }else {
            $error = true;
            $subcategory_error = "Please fill subcategory's name";
        }
        if(!$error) {
            $sub_category_name = $subcategoryController->get_subcategory_name($subcategory);
            if($sub_category_name[0]['total'] > 0) {
                echo "<span class='text-red-500 text-[20px] font-medium text-center'>You have already added this subcategory.Try Again.</span>";
            }else {
                $subcategoryController->add_subcategory($subcategory,$category);
            }
            
        }
        
    }
?>
<div class="max-w-md mx-auto">
        <h1 class="text-3xl pt-14 pb-10">Add new Subcategory</h1>
        <div class="bg-palegray-0 rounded-e-md shadow-lg shadow-slate-500">
            <form method="post">
                <div class="px-12 pt-8">
                    <label for="" class="w-full block mb-5 text-[20px] font-semibold">Select Category Name * </label>
                    <select name="category" id="" class="w-full block rounded-md  p-3">
                        <?php
                            foreach ($categories as $category) {
                                echo '<option value='.$category["id"].'>';
                                echo $category['name'];
                                echo '</option>';
                            }
                        ?>
                    </select>
                    <span class="text-red-500"><?php if(isset($select_category_error)) echo $select_category_error ?></span>
                </div>
                <div class="px-12 pt-8">
                    <label for="" class="w-full block mb-5 text-[20px] font-semibold">Subcategory Name * </label>
                    <input type="text" name="subcategory" class="w-full border border-gray-400 block p-2 rounded-md" id="">
                    <span class="text-red-500"><?php if(isset($subcategory_error)) echo $subcategory_error ?></span>
                </div>
                <div class="flex items-center justify-between pt-10 pb-16 px-5">
                    <div>
                        <button name='add_category' class="bg-purple-800 border border-purple-800 text-white py-3 px-2 rounded-md ms-8">Add Subcategory</button>
                    </div>
                    <div>
                        <a href="./index.php" class=" bg-transparent border border-black py-3 px-2 rounded-md me-8">Back to Subcategory</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include_once __DIR__. '/../../layout/footer.php';?>