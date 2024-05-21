<?php
    include_once '../layout/header.php';
    require_once '../controller/user/signupcontroller.php';
    $signup_controller = new SignUpController();
    
    if(isset($_POST['signup'])) {
        // print_r($_POST);
        $error_status = false;
        if(!empty($_POST['name'])) {
            $name = $_POST['name'];
        }else {
            $error_status = true;
            $name_error = "You need to fill your name";
        }
        if(!empty($_POST['email'])) {
            $email = $_POST['email'];
        }else {
            $error_status = true;
            $email_error = "You need to fill your email";
        }
        if(!empty($_POST['password'])) {
            $password = $_POST['password'];
        }else {
            $error_status = true;
            $password_error = "You need to fill your password";
        }
        if(!empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        }
        if(!empty($_POST['birth_date'])) {
            $birth_date = $_POST['birth_date'];
        }else {
            $error_status = true;
            $birth_date_error = "You need to fill your birthday";
        }
        if(!empty($_POST['address'])) {
            $address = $_POST['address'];
        }else {
            $error_status = true;
            $address_error = "You need to fill your address";
        }
        
        if(!$error_status) {
            $data = $signup_controller->getEmail($email);
            // print_r($data['total']);
            if($data['total'] >= 1) {
                echo "You have already used this email";
            }else {
                $signup_controller->insertData($name,$email,$password,$gender,$address,$birth_date);
                header('location: selectcategory.php');
            }
        }
    }
    

?>
   
   <main>
        <div class="body mx-auto max-w-3xl">
            <div class="flex items-center justify-between mt-10 mb-12">
                <h2 class="font-semibold text-xl text-gray-600">Create Your Shop Account</h2>
                <div>
                    <span>Already member?</span>
                    <span><a href="login.php" class="no-underline text-blue-500">Login</a> here.</span>
                </div>
            </div>
            <div class="w-full bg-white">
                <form action="" method="post" class="w-full flex">
                    <div class="w-1/2 pt-10 pb-10 me-5 ml-7 pl-5 pe-5">
                        <div class="flex flex-col">
                            <label for="">Email * </label>
                            <input type="email" name="email" id="emailinput" class="input" placeholder="Please enter your email">
                            <span class="text-red-500"><?php if(isset($email_error)) echo $email_error ?></span>
                        </div>
                        <div  class="flex flex-col mt-5">
                            <label for="">Password * </label>
                            <div class="relative">
                                <input type="password" name="password" id="userpassword" class="w-full input" placeholder="Please enter your password" value="<?php if(isset($password)) echo $password?>">
                                <i class="fa-regular fa-eye-slash absolute right-2 bottom-3 cursor-pointer" id="eyeslash"></i>
                                <!-- <i class="fa-regular fa-eye hidden absolute right-2 bottom-3 cursor-pointer"></i> -->
                            </div>
                            <span class="text-red-500"><?php if(isset($password_error)) echo $password_error ?></span>
                        </div>
                        <div class="mt-5">
                            <label for="" class="block pb-4">Gender *</label>
                            <div class="w-full flex justify-between">
                                <div>
                                    <input type="radio" name="gender" id="maleradio" value="male" <?php if(isset($gender) && $gender=="male") echo "checked"?> >
                                    <span class="text-lg">Male</span>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="femaleradio" value="female" <?php if(isset($gender) && $gender=="female") echo "checked"?>>
                                    <span class="text-lg">Female</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="">Birthday * </label>
                            <input type="date" name="birth_date" id="birthdateinput" class="input" placeholder="Please enter your name">
                            <span class="text-red-500"><?php if(isset($birth_date_error)) echo $birth_date_error ?></span>
                        </div>
                    </div>
                    <div class="w-1/2 pt-10 pb-10 me-5 ml-7 pe-5">
                        <div class="flex flex-col">
                            <label for="">Full name * </label>
                            <input type="text" name="name" id="nameinput" class="input" placeholder="Please enter your name">
                            <span class="text-red-500"><?php if(isset($name_error)) echo $name_error ?></span>
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="">Address * </label>
                            <input type="text" name="address" id="addressinput" class="input" placeholder="Please enter your address">
                            <span class="text-red-500"><?php if(isset($address_error)) echo $address_error ?></span>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="checkbox" name="" id="agreecheckbox" checked>
                            <span class="text-gray-600 text-sm">I agree to Shop Terms of Use and Privacy Policy</span>
                        </div>
                        <div class="w-full block bg-green-500 mt-5 mb-5 text-center rounded-sm cursor-pointer hover:bg-blue-700 hover:text-white">
                            <button name="signup" class="text-white p-3">Sign Up</button>
                        </div>
                        <div class="mt-3">
                            <span class="text-sm">Or, sign up with</span>
                        </div>
                        <div class="flex justify-between">
                            <div class="bg-blue-500 pl-8 pe-8 pt-3 pb-3 mt-5 flex items-center justify-center rounded-sm cursor-pointer">
                                <i class="fa-brands fa-square-facebook text-white"></i>
                                <span class="text-white pl-3">Facebook</span>
                            </div>
                            <div class="bg-red-500 pl-8 pe-8 pt-3 pb-3 mt-5 flex items-center justify-center rounded-sm cursor-pointer">
                                <i class="fa-brands fa-google text-white"></i>
                                <span class="text-white pl-3">Google</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/signup.js"></script>
</body>
</html>