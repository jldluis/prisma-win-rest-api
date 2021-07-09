<?php
class Product{
  
    // database connection and table name
    private $conn;
    private $table_name = "products";
  
    // object properties
    public $id;
	public $model;
	public $sku;
    public $name;
    public $description;
    public $price;
	public $price_with_vat;
	public $tax_class;
    public $category_id;
    public $category_name;
	public $status;
	public $weight;
    public $date_created;
	public $date_modified;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>