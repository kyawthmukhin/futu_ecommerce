<?php
    include_once __DIR__. '/../../layout/header.php';
    include_once __DIR__. '/../../controller/subcategorycontroller.php';
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $category_controller = new CategoryController();
    $categories=  $category_controller->get_category();
    echo "<br>";
    $subcategory = new SubCategoryController();
    $subcategories = $subcategory->get_subcategory();
    
?>

<main class=" mx-12">
        <div class="py-5">
            <h2 class="text-[30px] font-semibold my-8">Subcategories</h2>
            <a href="./create.php" class="p-3 bg-blue-400 text-white rounded-md">Add New SubCategory</a>
        </div>
        <div class="w-full mt-5">
            <table class="w-full border border-gray-500">
                <thead class="border-r border-r-gray-500">
                    <tr>
                        <th class="spacing">Id</th>
                        <th class="spacing">Name</th>
                        <th class="spacing">Category Name</th>
                        <th class="spacing">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($subcategories as $subcategory) {
                            echo "<tr class='capitalize'>";
                                echo "<td class='spacing'>".$subcategory['id']."</td>";
                                echo "<td class='spacing'>";
                                echo $subcategory['name'];
                                echo "</td>";
                                foreach ($categories as $category) {
                                    if($subcategory['category_id'] == $category['id']) {
                                        echo "<td class='spacing'>".$category['name']."</td>";
                                    }
                                }
                                echo "<td class='spacing flex items-center justify-center'>";
                                    echo '<a href="./edit.php?id=' .$subcategory['id'] .'&cate_id='. $subcategory['category_id'] .'" class="me-5 bg-yellow-500 p-2 pe-3 rounded-md text-white">';
                                    echo "<i class='fa-regular fa-pen-to-square px-2'></i>";
                                    echo "Edit</a>";

                                    echo '<a href="./delete.php?id=' .$subcategory['id'] .'" class="me-5 bg-red-700 p-2 pe-3 rounded-md text-white">';
                                    echo "<i class='fa-regular fa-trash-can px-2'></i>";
                                    echo "Delete</a>";
                                echo "</td>";
                            echo "</tr>";
                        }

                    ?>

                </tbody>
            </table>
        </div>
    </main>


<?php
    include_once __DIR__. '/../../layout/footer.php';
?>
<?php
    $status = isset($_GET['subcat_delstatus']) ? $_GET['subcat_delstatus'] : null;
    if($status != null) {
        if($status == 'true') {
            echo "<script>alert('Successfully deleted')</script>";
        }else {
            echo "<script>alert('Cannot be deleted')</script>";
        }
    }

?>