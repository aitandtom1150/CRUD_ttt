<?php
    class config{
        private const DBhost = "localhost";
        private const DBuser = "root";
        private const DBpass = "";
        private const DBname = "CRUD_app";
        private $dsn = "mysql:host=" . self::DBhost . ";dbname=" . self::DBname . '';
        protected $conn = null;


        public function __construct() {
            try {
                $this->conn = new PDO($this->dsn, self::DBuser, self::DBpass);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e){
                die("Error: " . $e->getMessage());
            }
        }
    
    
    }
$name = "<br>Aitsada";
$lname = "<br>Asadit";

// check connected
$config = new config();
echo "Database connected successfully!";
echo $name;
echo $lname;


?>
