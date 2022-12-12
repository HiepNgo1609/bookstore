<?php 
class Users {
    private $conn;
    private $table = 'users';

    public $id;
    public $username;
    public $address;
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

    public function getUsersNum() {
        $query = '
            SELECT COUNT(id) AS NUM FROM ' . $this->table . '
        ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getUserById() {
        $query = '
            SELECT *
            FROM ' . $this->table . '
            WHERE id=:id
        ';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt;
    }

    public function updateUserAddress() {
        $query = '
                UPDATE ' . $this->table . '
                SET address= :address
                WHERE id= :id
        ';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s.\n", $stmt->error);
            return false;
        }
    }
}