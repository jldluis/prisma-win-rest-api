<?php
class Manufacturer{
  
    // database connection and table name
    private $conn;
    private $table_name = "manufacturers";
  
    // object properties
    public $id;
    public $name;
    public $description;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>