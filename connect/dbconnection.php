<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = " ";
    private $dbname = "project";
    public $conn;

    // Get the database connection
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        } catch (Exception $e) {
            echo "Connection error: " . $e->getMessage();
        }

        return $this->conn;
    }
}

// Usage
$database = new Database();
$db = $database->getConnection();
?>
