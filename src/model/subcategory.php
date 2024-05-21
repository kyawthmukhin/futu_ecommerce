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
        function delete_subcategory_id($del_id) {
            $this->connect = Database::connect();
            $mysql = 'select * from products where subcategory_id = :del_id';
            $statement1 = $this->connect->prepare($mysql);
            $statement1->bindParam(':del_id',$del_id);
            if($statement1->execute()) {
                $result = $statement1->fetchAll(PDO::FETCH_ASSOC);
                if(sizeof($result) == 0) {
                    $this->connect = Database::connect();
                    $mysql = 'update sub_categories set archive=1 where id=:del_id';
                    $statement2 = $this->connect->prepare($mysql);
                    $statement2->bindParam(':del_id',$del_id);
                    return $statement2->execute();
                }
                return false;
            }
            
        }
    }
?>