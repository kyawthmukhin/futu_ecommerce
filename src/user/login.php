<?php
    include_once '../layout/header.php';
    if(isset($_POST['login'])) {
        $error = false;
        if(!empty($_POST['email'])) {
            $email = $_POST['email'];
        }
        else {
            $error = true;
            $email_error = "Please enter your email";
        }
        if(!empty($_POST['password'])) {
            $password = $_POST['password'];
        }
        else {
            $error = true;
            $password_error = "Please enter your password";
        }
        if(!$error) {
             header('location:../index.php');
        }
    }

?>

    <main>
        <div class="body mx-auto max-w-3xl">
            <div class="flex items-center justify-between mt-16 mb-12">
                <h2 class="font-semibold text-xl text-gray-600">Welcome to Shop! Please Login.</h2>
                <div>
                    <span>New member?</span>
                    <span><a href="signup.php" class="no-underline text-blue-500">Register</a> here.</span>
                </div>
            </div>
            <div class="w-full bg-white">
                <form action="" method="post" class="flex">
                    <div class="w-1/2  pt-10 pb-10 me-5 ml-7">
                        <div class="flex flex-col">
                            <label for="">Email * </label>
                            <input type="email" name="email" id="email" class="mt-3 p-2 border border-gray-500 rounded-sm placeholder-gray-400" placeholder="Please enter your email">
                            <span class="text-red-500"><?php if(isset($email_error)) echo $email_error ?></span>
                        </div>
                        <div  class="flex flex-col mt-8">
                            <label for="">Password * </label>
                            <div class="relative">
                                <input type="password" name="password" id="userpassword" class="w-full mt-3 p-2 border border-gray-500 rounded-sm placeholder-gray-400" placeholder="Please enter your password">
                                <i class="fa-regular fa-eye-slash absolute right-2 bottom-3 cursor-pointer" id="eyeslash"></i>
                            </div>
                            <span class="text-red-500"><?php if(isset($password_error)) echo $password_error ?></span>
                        </div>
                        <div class="text-right mt-4">
                            <a href="#" class="text-blue-500 cursor-pointer">Reset your password</a>
                        </div>
                    </div>
                    <div class="w-1/2 pt-10 pb-10 me-5 ml-7">
                        <div class="w-full block bg-green-500 mt-3 mb-3 text-center rounded-sm cursor-pointer hover:bg-blue-700">
                            <button name="login" class="text-white h-14">LOGIN</button>
                        </div>
                        <div class="mt-2 mb-2">
                            <span>Or, login with</span>
                        </div>
                        <div class="w-full bg-blue-500 h-10 mt-5 flex items-center justify-center rounded-sm cursor-pointer">
                            <i class="fa-brands fa-square-facebook text-white"></i>
                            <span class="text-white pl-5">Facebook</span>
                        </div>
                        <div class="w-full bg-red-500 h-10 mt-5 flex items-center justify-center rounded-sm cursor-pointer">
                            <i class="fa-brands fa-google text-white"></i>
                            <span class="text-white pl-5">Google</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/signup.js"></script>
</body>
</html>