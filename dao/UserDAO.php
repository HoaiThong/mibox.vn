<?php

class UserDAO {

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

    
    function signin_by_phone($phoneNumber, $password) {
        try {
            
            $sql = "CALL signin_by_phone(:phoneNumber,:password)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);

            // Thiết lập kiểu dữ liệu trả về
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */

            $response["staff"] = $resultSet;
            // success
            $response[$this->success] = $this->success;
            $response[$this->message] = "success";
        } catch (PDOException $e) {
            $response[$this->success] = $this->error;
            $response[$this->message] = "error";
        }
        return $response;
    }
    
    

}

?>