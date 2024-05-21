<?php 
include_once __DIR__ . '/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>public/style.css">
    <script src="https://kit.fontawesome.com/dda807d9c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="w-full ">
        <nav class="w-full flex relative">
            <div class="side-bar sticky top-0 left-0 w-1/6 h-screen border border-r border-r-gray-200">
                <div class="brand-logo flex justify-center items-center py-3 border border-b  border-b-gray-400">
                    <svg class="w-12 h-12 text-center hidden lg:block md:hidden sm:block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#008cff;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#ff00bf;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <g>
                            <g>
                                <path fill="url(#grad1)" d="M56.846,32.677c0.297-1.558,0.447-3.11,0.447-4.632C57.293,14.097,45.946,2.75,32,2.75S6.707,14.097,6.707,28.044    c0,1.521,0.15,3.074,0.446,4.632c-4.362,3.076-6.746,6.932-6.746,10.97C0.407,53.518,14.284,61.25,32,61.25    s31.593-7.732,31.593-17.604C63.593,39.608,61.209,35.752,56.846,32.677z M32,57.25c-14.957,0-27.593-6.229-27.593-13.604    c0-2.959,2.148-5.929,6.05-8.363c0.733-0.458,1.09-1.335,0.884-2.174c-0.421-1.71-0.634-3.414-0.634-5.065    C10.707,16.303,20.259,6.75,32,6.75s21.293,9.553,21.293,21.294c0,1.652-0.214,3.356-0.635,5.064    c-0.206,0.84,0.15,1.718,0.884,2.175c3.902,2.434,6.051,5.404,6.051,8.363C59.593,51.021,46.957,57.25,32,57.25z">
                                </path>
                                <path fill="url(#grad1)" d="M47.358,42.849c0-2.175-1.189-5.191-3.097-7.965c0.437-0.841,0.663-1.73,0.663-2.63c0-4.8-6.16-9.172-12.925-9.172    s-12.925,4.372-12.925,9.172c0,0.899,0.227,1.79,0.664,2.63c-1.908,2.773-3.098,5.79-3.098,7.965c0,0.469-0.041,0.956-0.08,1.449    c-0.153,1.92-0.363,4.549,1.595,6.669c2.203,2.386,6.473,3.449,13.844,3.449c7.37,0,11.64-1.063,13.843-3.449    c1.958-2.121,1.749-4.75,1.596-6.67C47.399,43.804,47.358,43.317,47.358,42.849z M42.904,48.253    C41.993,49.24,39.361,50.416,32,50.416c-7.362,0-9.994-1.176-10.905-2.163c-0.732-0.793-0.685-1.899-0.546-3.638    c0.046-0.574,0.093-1.167,0.093-1.767c0-1.349,1.069-4.076,3.113-6.677c0.592-0.753,0.567-1.819-0.059-2.543    c-0.412-0.477-0.621-0.939-0.621-1.375c0-2.035,3.832-5.172,8.925-5.172s8.925,3.138,8.925,5.172c0,0.436-0.209,0.898-0.62,1.375    c-0.625,0.724-0.65,1.791-0.06,2.543c2.044,2.602,3.113,5.329,3.113,6.678c0,0.6,0.047,1.192,0.093,1.766    C43.59,46.354,43.638,47.459,42.904,48.253z">
                                </path>
                                <path fill="url(#grad1)" d="M16.111,23.435c-3.225,0-3.225,5,0,5S19.336,23.435,16.111,23.435z">
                                </path>
                                <path fill="url(#grad1)" d="M47.889,23.435c-3.225,0-3.225,5,0,5S51.113,23.435,47.889,23.435z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="text-4xl font-semibold pl-2">FUTU</span>
                </div>
                <div>
                    <div class="border-b border-b-gray-200">
                        <div class="py-3 flex items-center justify-start mx-10">
                            <img src="<?= BASE_URL ?>public/img/dashboard-svgrepo-com.svg" alt="dashboard" class="w-8 h-8">
                            <span class="pl-2 text-[18px]"><a href="">Dashboard</a></span>
                        </div>
                    </div>
                    <div class="admin-console mt-5">
                        <span class="text-gray-700 pl-6">Admin Console</span>
                        <ul class="mt-3">
                            <li class="border-b border-b-gray-200 category-group cursor-pointer">
                                <span class="flex items-center justify-between p-4">
                                    <div class="flex items-center pl-5">
                                        <i class="fa-solid fa-layer-group"></i>
                                        <p class="pl-3">Categories</p>
                                    </div>
                                    <div class=" pe-5">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                </span>
                            </li>
                            <ul class="hidden w-full">
                                <li class="py-3 pl-14 w-full">
                                    <a href="<?= BASE_URL ?>src/admin/categories/index.php" class="flex items-center">
                                        <i class="fa-solid fa-layer-group pl-3 pe-3"></i>
                                        <p>Category</p>
                                    </a>
                                </li>
                                <li class="py-3 pl-14 w-full border-b border-b-gray-200">
                                    <a href="<?= BASE_URL ?>src/admin/subcategories/index.php" class="flex items-center">
                                        <i class="fa-solid fa-layer-group pl-3 pe-3"></i>
                                        <p>Subcategory</p>
                                    </a>
                                </li>
                            </ul>
                            <li class="border-b border-b-gray-200">
                                <a href="<?= BASE_URL ?>src/admin/products/index.php" class="flex items-center pl-8 py-3">
                                    <img src="<?= BASE_URL ?>public/img/product.svg" alt="" class="w-6 h-6">
                                    <span class="pl-3 text-[18px]">Products</span>
                                </a>
                            </li>
                            <li class="users border-b border-b-gray-200">
                                <div class="flex items-center justify-between p-4">
                                    <div class="flex items-center pl-5">
                                        <i class="fa-solid fa-users"></i>
                                        <span class="pl-3 text-[18px]">Users</span>
                                    </div>
                                    <div class="pe-5">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                </div>
                            </li>
                            <ul class="hidden w-full">
                                <li class="pl-14 w-full">
                                    <a href="#" class="flex items-center">
                                        <img src="<?= BASE_URL ?>public/img/customer.svg" class="pl-3 pe-3 w-12 h-12" alt="">
                                        <p>Customers</p>
                                    </a>
                                </li>
                                <li class="pl-14 w-full border-b border-b-gray-200">
                                    <a href="#" class="flex items-center">
                                        <img src="<?= BASE_URL ?>public/img/employee.svg" class="pl-3 pe-3 w-12 h-12" alt="">
                                        <p>Employees</p>
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-nav w-5/6">
                <nav class="shadow-sm">
                    <div class="flex px-6 justify-between  py-[24.3px] items-center border-b border-gray-200">
                        <div class="menu cursor-pointer">
                            <i class="fa-solid fa-bars text-[18px]"></i>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center border-r border-r-slate-400 me-4">
                                <div class="relative me-5">
                                    <i class="fa-regular fa-bell text-[18px] font-semibold mr-5"></i>
                                    <span class="w-5 h-5 absolute bottom-4 left-2 rounded-xl text-[12px] bg-red-500 text-white text-center">8</span>
                                </div>
                                <div class="relative">
                                    <i class="fa-regular fa-envelope text-[20px] font-semibold mr-5"></i>
                                    <span class="w-5 h-5 absolute bottom-4 left-2 rounded-xl text-[12px] bg-blue-500 text-white text-center">5</span>
                                </div>
                            </div>
                            <div class="border-r border-r-slate-400 pe-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>
                            </div>
                            <div class="ps-5">
                                <img src="<?= BASE_URL ?>public/img/girl.jpg" alt="" class="w-[26px] h-[26px] border border-gray-500 rounded-full">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center py-[15px] px-5 border-b border-b-gray-200">
                        <div>
                            <span><a href="">Home</a></span>
                            <span><a href="">Dashboard</a></span>
                        </div>
                    </div>
                </nav>
                <div class="px-10 bg-gray-100 h-auto">