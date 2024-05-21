<?php
    include_once __DIR__. '/../../layout/header.php';
    include_once __DIR__. '/../../controller/categoriescontroller.php';
    $categoryController = new CategoryController();
    $categories = $categoryController->get_category();
?>

    <div>
        <?php
            if(isset($_GET['status'])) {   
                echo'<div class="flex w-full items-center justify-between pt-3">';
                    echo "<p class='w-3/4 text-center p-3 bg-red-600 rounded-md text-white'>";
                        echo "Cannot be Deleted";
                    echo "</p>";
                    echo "<a href='./index.php' class='border border-gray-500 rounded-md p-3 hover:bg-blue-600 hover:text-white'>Back to Category</a>";
                echo '</div>';
            }

        ?>
    </div>

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
                            echo "<tr>";
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