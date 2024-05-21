<?php
    include_once __DIR__. '/../model/category.php';
    class CategoryController {
        private $category;
        function __construct()
        {
            $this->category = new Category();
        }
        function get_category() {
            return $this->category->getCategory();
        }
        function selected_category_items($categories) {
            return $this->category->selected_category_items($categories);
        }
        function get_category_name($category_name) {
            return $this->category->getCategoryName($category_name);
        }
        function add_category($category_name) {
            return $this->category->addcategory($category_name);
        }
        function get_edited_id($id) {
            return $this->category->edited_id($id);
        }
        function update_category_name($category_name,$edit_id) {
            return $this->category->update_category_name($category_name,$edit_id);
        }
        function delete_category($deleted_id) {
            return $this->category->delete_category($deleted_id);
        }
    }

?>