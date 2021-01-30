<?php

class StoreDAO {

    private $conn;
    private $message = "message";
    private $success = "success";
    private $error = "error";

    // constructor
    public function __construct() {
        require_once 'dbUtil.php';
        // connecting to database
        $db = new DatabaseUtil();
        $this->conn = $db->connectPDO();
    }

    public function __destruct() {
        $this->conn = null;
        // $this->db->closePDO();
    }

    public function create_store($param) {
        
    }
    
    public function update_store($param) {
        
    }

    public function get_store_info($param) {
        
    }
   
}

?>