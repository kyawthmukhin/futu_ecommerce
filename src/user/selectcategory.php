<?php 
    session_start();
    include_once('../controller/categoriescontroller.php');
    $category = new CategoryController();
    $categories = $category->get_category();
    $get_category = [];
    
    if(isset($_POST['next'])) {
        foreach($categories as $category_item) {
            $product_name = explode(' ',$category_item['name']);
            $product = implode('_', $product_name);
            if(!empty($_POST[$product])) {
                $get_category[] = $_POST[$product];
            }

        }
        
        // print_r($get_category);
        $_SESSION['category_items'] = $get_category;
        header('location:getcategory.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/style.css">
    <script src="https://kit.fontawesome.com/dda807d9c3.js" crossorigin="anonymous"></script>
    <title>Futu Ecommerce Online Shopping</title>
</head>
<body class="bg-palegray-0">
    <header>
        <nav class="flex bg-blue-400 items-center justify-evenly h-16">
            <div class="logo flex items-center w-1/5">
                <img src="../../public/img/duck.svg" alt="duck logo" class="w-8">
                <span class="text-white pl-5 font-medium text-xl">Futu Ecommerce</span>
            </div>
            <ul class="flex items-center justify-between w-3/5">
                <li class="pl-9 pe-10 font-medium text-lg"><a href="" class="text-white hover:text-blue-900">Home</a></li>
                <li class="pl-9 pe-10 font-medium text-lg"><a href="" class="text-white hover:text-blue-900">About</a></li>
                <li class="pl-9 pe-10 font-medium text-lg flex items-center">
                    <i class="fa-regular fa-user text-white"></i>
                    <a href="login.php" class="text-white hover:text-blue-900 pl-3">Login</a>
                </li>
                <li class="pl-9 pe-10 font-medium text-lg"><a href="signup.php" class="text-white hover:text-blue-900">Signup</a></li>
                <li class="pl-9 pe-10 font-medium text-lg"><a href="" class="text-white hover:text-blue-900">Cart</a></li>
                <li class="pl-9 relative">
                    <input type="search" name="" id="" class="w-60 h-8 rounded-md">
                    <i class="fa-solid fa-magnifying-glass absolute right-5 top-2 text-gray-400"></i>
                </li>
            </ul>
        </nav>
    </header>
    <main>
    <div class="">
        <form action="" method="post" class="max-w-screen-xl mx-auto">
            <div class=" grid grid-cols-5 gap-8 py-12">
                <?php
                    for($index=0;$index<sizeof($categories);$index++) {
                        $product_name= explode(' ',$categories[$index]['name']);
                        $product = implode('_', $product_name);
                        echo "<div class='border border-gray-500 relative w-full mt-3 rounded-md hover:text-black hover:grayscale hover:scale-105 hover:transition-all category' id='{$categories[$index]['id']}'>";
                                    echo "<img src='../../public/img/{$product}.jpg' alt='fruit' class='w-full h-[200px]'>";
                                    echo "<input type='checkbox' name={$product} value={$categories[$index]['id']} class='absolute top-3 right-3 w-5 h-5 rounded-full'";
                                        if(in_array($categories[$index]['id'], $get_category)) {
                                            echo "checked";
                                        }
                                    echo ">";
                                    echo "<div class='mt-3 mb-3 text-center'>";
                                    echo "<span class='font-[500] text-[18px]'>{$categories[$index]['name']}</span>";
                                    echo "</div>";
                        echo "</div>";
                    }
                    
                ?>
            </div>
            
            <div class="mt-5">
                <button class="btn border-gray-600 bg-blue-500 p-3" name="next">Next</button>
            </div>
        </form>    
    </div>

    <script src="../js/selectcategory.js"></script>
    </main>
</body>
</html>