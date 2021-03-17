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

    public function creat_table_product($_idStore) {
        $tblProduct = "tbl_product_" . $_idStore;

        try {
            $query = "CREATE TABLE IF NOT EXISTS "
                    . $tblProduct
                    . " (id INTEGER not NULL AUTO_INCREMENT, "
                    . " name TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, "
                    . " page INTEGER, "
                    . " url TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, "
                    . " PRIMARY KEY ( id ))";
            $sql1 = "
            CREATE TABLE IF NOT EXISTS " . $tblProduct . " (
                task_id     INT AUTO_INCREMENT   PRIMARY KEY,
                subject     VARCHAR (255)        DEFAULT NULL,
                start_date  DATE                 DEFAULT NULL,
                end_date    DATE                 DEFAULT NULL,
                description VARCHAR (400)        DEFAULT NULL
            );
        ";
            $this->conn->exec($sql1);
            $response[$this->success] = 1;
            $response[$this->message] = $this->success;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e->getMessage();
        }
        __destruct();
        return $response;
    }

    function get_array_product($_idStore) {
        $idStore = (int) $_idStore;
        $tblProduct = "tbl_product_" . $_idStore;
        try {
            //$sql = "CALL get_array_product(:idStore)";
            $sql = "Select * from " . $tblProduct . " where idStore=1";
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
        __destruct();
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