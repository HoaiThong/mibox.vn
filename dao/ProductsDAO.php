<?php

class ProductDAO {

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

    function get_array_product($_idStore) {
        $idStore = (int) $_idStore;
        try {
            //$sql = "CALL get_array_product(:idStore)";
            $sql="Select * from tbl_product where idStore=1";
            $stmt = $this->conn->prepare($sql);
           // $stmt->bindParam(':idStore', $idStore, PDO::PARAM_INT);
            

            // Thiết lập kiểu dữ liệu trả về
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */

           
        } catch (PDOException $e) {
            
        }
        return $resultSet;
    }
    
    public function add_product($param) {
        
    }
    
    public function update_product($param) {
        
    }
    
    public function remove_product($param) {
        
    }

   
}

?>