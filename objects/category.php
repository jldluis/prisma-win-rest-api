<?php
class Category{
  
    // database connection and table name
    private $conn;
    private $table_name = "categories";
  
    // object properties
    public $id;
    public $name;
	public $parent_id;
    public $description;
	public $image_src;
	public $status;
    public $date_created;
	public $date_modified;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>