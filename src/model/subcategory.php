<?php
    include_once __DIR__ . '/../include/database.php';

    class SubCategory {
        public $connect;
        function get_subcategory() {
            $this->connect = Database::connect();
            $mysql = "select * from sub_categories";
            $statement = $this->connect->prepare($mysql);
            if($statement->execute()) {
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
        function add_subcategory($subcategory,$category) {
            $this->connect = Database::connect();
            $mysql = 'insert into sub_categories (name,category_id) values (:subcategory, :category)';
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':subcategory', $subcategory);
            $statement->bindParam(':category', $category);
            $statement->execute();
        }
        function get_subcategory_name($subcategory_name) {
            $this->connect = Database::connect();
            $mysql = 'select count(*) as total from sub_categories where name=:subcategory';
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':subcategory', $subcategory_name);
            if($statement->execute()) {
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }  
        function get_subcategory_id($id, $category_id) {
            $this->connect = Database::connect();
            $mysql = 'select * from sub_categories where id=:id and category_id = :category_id';
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':id', $id);
            $statement->bindParam(':category_id', $category_id);
            if($statement->execute()) {
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                return $result;
            }
        } 
        function update_subcategory_id($category_id,$subcategory_name,$id) {
            $this ->connect = Database::connect();
            $mysql = 'update sub_categories set name=:subcategory_name, category_id=:category_id where id=:id';
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':subcategory_name', $subcategory_name);
            $statement->bindParam(':category_id', $category_id);
            $statement->bindParam(':id', $id);
            $statement->execute();
        }
    }
?>