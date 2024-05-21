<?php 
    include_once __DIR__. '/../include/database.php';
    class Category {
        private $connect;
        function selected_category_items($categories) {
            $this->connect = Database::connect();
            $sql = "SELECT * FROM (
                SELECT *, ROW_NUMBER() OVER(PARTITION BY category_id ORDER BY id) AS row_num
                FROM products
                WHERE category_id IN (" . implode(",", $categories) . ")
             ) AS ranked_products
             WHERE row_num <= 10";
    
                        
            $statement = $this->connect->prepare($sql);
            if($statement->execute()) {
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            }
            
        }
        function getCategory() {
            $this->connect = Database::connect();
            $mysql = 'select * from categories';
            $statement = $this->connect->prepare($mysql);
            if($statement->execute()) {
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
        function getCategoryName($category_name) {
            $this->connect = Database::connect();
            $mysql = "select count(*) as total from categories where name=:category_name";
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':category_name',$category_name);
            if($statement->execute()) {
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        }
        function addCategory($category_name) {
            $this->connect = Database::connect();
            $mysql = "insert into categories (name) values (:category_name)";
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':category_name',$category_name);
            $statement->execute();
        }
        function edited_id($id) {
            $this->connect = Database::connect();
            $mysql = 'select * from categories where id=:id';
            $statement= $this->connect->prepare($mysql);
            $statement->bindParam(':id', $id);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        function update_category_name($category_name,$id) {
            $this->connect = Database::connect();
            $mysql = 'update categories set name=:category_name where id=:id';
            $statement = $this->connect->prepare($mysql);
            $statement->bindParam(':category_name',$category_name);
            $statement->bindParam(':id',$id);
            $statement->execute();
        }
        function delete_category($deleted_id) {
            $this->connect = Database::connect();
            $mysql = 'select * from sub_categories where category_id =:deleted_id';
            $statement1 = $this->connect->prepare($mysql);
            $statement1->bindParam(':deleted_id',$deleted_id);
            if($statement1->execute()) {
                $result = $statement1->fetchAll(PDO::FETCH_ASSOC);
                if(sizeof($result) == 0) {
                    $this->connect = Database::connect();
                    $mysql = 'update categories set archive=1 where id=:id';
                    $statement2 = $this->connect->prepare($mysql);
                    $statement2->bindParam(':id',$delete_id);
                    return $statement2->execute();
                }
                return false;
            }
        }
            
    }


?>