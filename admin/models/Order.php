<?php
class Order
{
    private $conn;
    private $table = 'orders';

    public $id;
    public $discount;
    public $code;
    public $invoice;
    public $status;
    public $user_id;
    public $user_username;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function genCode()
    {
        return uniqid($this->user_username, false);
    }

    public function getAllOrders()
    {
        $query = '
                SELECT o.id, 
                    u.username,
                    o.code, 
                    o.discount, 
                    o.invoice, 
                    o.status, 
                    o.created_at 
                FROM ' . $this->table . ' o 
                LEFT JOIN users u ON o.user_id = u.id
                ORDER BY o.created_at DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getOrdersOnProcessing()
    {
        $query = "
                SELECT o.id, 
                    u.username,
                    o.code, 
                    o.discount, 
                    o.invoice, 
                    o.status, 
                    o.created_at 
                FROM " . $this->table . " o 
                LEFT JOIN users u ON o.user_id = u.id
                WHERE o.status = 'Processing'
        ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getOrderIdByCode($code)
    {
        $query = '
            SELECT id  
            FROM ' . $this->table . '
            WHERE code=:code';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        return $stmt;
    }

    public function addOrder()
    {
        $query = '
                INSERT INTO ' . $this->table . '
                SET user_id= :userid,
                    code= :code,
                    discount= :discount,
                    invoice= :invoice,
                    status= :status
        ';
        $stmt = $this->conn->prepare($query);

        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->discount = htmlspecialchars(strip_tags($this->discount));
        $this->invoice = htmlspecialchars(strip_tags($this->invoice));
        $this->status = htmlspecialchars(strip_tags($this->status));

        $stmt->bindParam(':userid', $this->user_id);
        $stmt->bindParam(':code', $this->code);
        $stmt->bindParam(':discount', $this->discount);
        $stmt->bindParam(':invoice', $this->invoice);
        $stmt->bindParam(':status', $this->status);

        if ($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s.\n", $stmt->error);
            return false;
        }
    }

    public function updateOrder()
    {
        $query = '
                UPDATE ' . $this->table . '
                SET user_id= :userid,
                    code= :code,
                    discount= :discount,
                    invoice= :invoice,
                    status= :status
                WHERE id= :id
        ';
        $stmt = $this->conn->prepare($query);

        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->discount = htmlspecialchars(strip_tags($this->discount));
        $this->invoice = htmlspecialchars(strip_tags($this->invoice));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':userid', $this->user_id);
        $stmt->bindParam(':code', $this->code);
        $stmt->bindParam(':discount', $this->discount);
        $stmt->bindParam(':invoice', $this->invoice);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            printf("Error: %s.\n", $stmt->error);
            return false;
        }
    }
}
