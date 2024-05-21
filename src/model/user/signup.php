<?php  
    include_once '../include/database.php';
    class UserSignUp {
        private $connection;
        function insertData($name,$email,$password,$gender,$address,$birth_date) {
            $this->connection = Database::connect();
            $sql = "insert into customers(name,email,password,gender,address,birth_date) 
                          values (:name, :email,:password,:gender,:address,:birth_date)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':password', $password);
            $statement->bindParam(':gender', $gender);
            $statement->bindParam(':address', $address);
            $statement->bindParam(':birth_date', $birth_date);
            $statement->execute();
        }
        function getEmail($email) {
            $this->connection = Database::connect();
            $sql = "select count(*) as total from customers where email=:email";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(":email", $email);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;
            
        }
    }

?>