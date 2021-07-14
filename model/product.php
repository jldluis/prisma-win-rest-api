<?php

class Product
{
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
	public $quantity;
	public $tax_class;
	public $manufacturer_id;
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

    public function read()
    {
        $query = "SELECT c.name as category_name, p.id, p.name, p.description, p.price, p.cat_id, p.created FROM " . $this->table_name . " p LEFT JOIN categories c ON p.cat_id = c.id ORDER BY p.created DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, price=:price, description=:description, cat_id = :cat_id, created = :created";
        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->cat_id = htmlspecialchars(strip_tags($this->cat_id));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->created = htmlspecialchars(strip_tags($this->created));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":cat_id", $this->cat_id);
        $stmt->bindParam(":created", $this->created);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function readOne()
    {
        $query = "SELECT c.name as cat_name, p.id, p.name, p.description, p.price, p.cat_id, p.created FROM " . $this->table_name . " p LEFT JOIN categories c ON p.cat_id = c.id WHERE p.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];
        $this->price = $row['price'];
        $this->description = $row['description'];
        $this->created = $row['created'];
        $this->cat_id = $row['cat_id'];
        $this->cat_name = $row['cat_name'];
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET name=:name, price=:price, description=:description, cat_id = :cat_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->cat_id = htmlspecialchars(strip_tags($this->cat_id));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":cat_id", $this->cat_id);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
