<?php 
class Database
{
    private static $instance = null;
    private $conn;

    private function __construct()
    {
        $config = require BASE_PATH . '/app/Config/Database.php';
        
        $this->conn = new mysqli(
            $config["host"],
            $config["user"],
            $config["pass"],
            $config["name"]
        );
    

        if($this->conn->connect_error) {
            die("koenksi gagal" . $this->conn->connect_error);
        }
        }

        public static function getInstance()
        {
            if(self::$instance === null)
                {
                    self::$instance = new Database();

                }
                return self::$instance;
        }

        public function getConnection() 
        {
            return $this->conn;
        }
}