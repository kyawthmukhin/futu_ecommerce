<?php
    include_once('../../model/user/login.php');
    class UserLogin {
        private $userlogin;
        function __construct()
        {
            $this->userlogin = new User();
        }
        function insertData($email,$password) {
            return $this->userlogin->insertData($email,$password);
        }
    }


?>