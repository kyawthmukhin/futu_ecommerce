<?php
    include_once __DIR__. '/../../layout/header.php';
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $categoryController = new CategoryController();
    $categories = $categoryController->get_category();
?>

    <main class=" mx-12">
        <div class="py-5">
            <h2 class="text-[30px] font-semibold my-8">Categories Information</h2>
            <a href="./create.php" class="p-3 bg-blue-400 text-white rounded-md">Add New Category</a>
        </div>
        <div class="w-full mt-5">
            <table class="w-full border border-gray-500">
                <thead class="border-r border-r-gray-500">
                    <tr>
                        <th class="spacing">Id</th>
                        <th class="spacing">Name</th>
                        <th class="spacing">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($categories as $category) {
                            echo "<tr class='capitalize'>";
                                echo "<td class='spacing'>".$category['id']."</td>";
                                echo "<td class='spacing'>".$category['name']."</td>";
                                echo "<td class='spacing flex items-center justify-center'>";
                                    echo '<a href="./editcategory.php?id=' .$category['id'] .'" class="me-5 bg-yellow-500 p-2 pe-3 rounded-md text-white">';
                                    echo "<i class='fa-regular fa-pen-to-square px-2'></i>";
                                    echo "Edit</a>";

                                    echo '<a href="./deletecategory.php?id=' .$category['id'] .'" class="me-5 bg-red-700 p-2 pe-3 rounded-md text-white">';
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
    $cate_delete_status = isset($_GET['cate_delete_status']) ? $_GET['cate_delete_status'] : null;
    if($cate_delete_status !== null) {
        if($cate_delete_status == 'true') {
            echo "<script> alert('Successfully Deleted!') </script>";
        } else {
            echo "<script> alert('Cannot Be Deleted!') </script>";
        }
    }

?>