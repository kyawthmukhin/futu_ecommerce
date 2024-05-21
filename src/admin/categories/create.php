<?php
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $category_controller = new CategoryController();

    if(isset($_POST['add_category'])) {
        $error = false;
       if(!empty($_POST['categoryname'])) {
            $category_name = $_POST['categoryname'];
       }else {
            $category_name_error = "Please fill category name";
            $error = true;
       }
       if(!$error) {
            $category = $category_controller->get_category_name($category_name);
            if($category[0]['total']>0) {
                echo "You have already added category";
            }else {
                $category_controller->add_category($category_name);
                header('location:index.php');
            }
            
       }
    }

    include_once __DIR__. '/../../layout/header.php';
?>
    <div class="max-w-md mx-auto">
        <h1 class="text-3xl pt-14 pb-10">Add new category</h1>
        <div class="bg-palegray-0 rounded-e-md shadow-lg shadow-slate-500">
            <form method="post">
                <div class="px-12 pt-8">
                    <label for="" class="w-full block mb-5 text-[20px] font-semibold">Category Name * </label>
                    <input type="text" name="categoryname" class="w-full border border-gray-400 block p-2 rounded-md" id="">
                    <span class="text-red-500"><?php if(isset($category_name_error)) echo $category_name_error ?></span>
                </div>
                <div class="flex items-center justify-between pt-10 pb-16 px-5">
                    <div>
                        <button name='add_category' class="bg-purple-800 border border-purple-800 text-white py-3 px-2 rounded-md ms-8">Add Category</button>
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