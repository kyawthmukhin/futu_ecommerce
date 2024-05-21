<?php
    include_once __DIR__ . '/../model/subcategory.php';

    class SubCategoryController {
        public $subcategory;
        function __construct()
        {
            $this->subcategory = new SubCategory();
        }
        function get_subcategory() {
            return $this->subcategory->get_subcategory();
        }
        function add_subcategory($subcategory,$category) {
            return $this->subcategory->add_subcategory($subcategory,$category);
        }
        function get_subcategory_name($subcategory) {
            return $this->subcategory->get_subcategory_name($subcategory);
        }
        function get_subcategory_id($id, $category_id) {
            return $this->subcategory->get_subcategory_id($id, $category_id);
        }
        function update_subcategory_id($category_id,$subcategory_name,$id) {
            return $this->subcategory->update_subcategory_id($category_id,$subcategory_name,$id);
        }
        function delete_subcategory_id($del_id) {
            return $this->subcategory->delete_subcategory_id($del_id);
        }
     }

?>