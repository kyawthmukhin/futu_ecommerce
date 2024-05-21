<?php
    include_once '../model/user/signup.php';
    class SignUpController {
        private $signup;
        function __construct()
        {
            $this->signup = new UserSignUp();
        }
        function insertData($name,$email,$password,$gender,$address,$birth_date) {
           return $this->signup->insertData($name,$email,$password,$gender,$address,$birth_date);
        }
        function getEmail($email) {
           return $this->signup->getEmail($email);
        }
    }

?>