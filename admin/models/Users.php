<?php 
class Users {
    private $conn;
    private $table = 'users';

    public $id;
    public $username;
    public $role;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllUsers() {
        $query = '
            SELECT *
            FROM ' . $this->table . '
            WHERE role = "customer"
        ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}