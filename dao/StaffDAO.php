<?php

class StaffDAO {

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

   public function add_staff($param) {
       
   }
   
   public function update_role($param) {
       
   }
   
   public function get_array_staff_on_store($param) {
       
   }
}

?>