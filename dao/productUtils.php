<?php

class ProductUtil {

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

    public function insertCustomer($customerJson) {
        try {
            $customerArray = json_decode($customerJson, true);
            $sql = "INSERT INTO customer (idFacebook, idGoogle, idAccoutKit,nameFaceBook, nameGoogle, firstName, secondName,
             linkFacebook, phone, phoneFacebook, emailFacebook, emailGoogle, emailAccoutKit, sex,address, dateOfBirth, idTokenFcm, iconUrl, job, locale) 
VALUES (:idFacebook, :idGoogle, :idAccoutKit, :nameFaceBook, :nameGoogle, :firstName, :secondName, :linkFacebook,
 :phone, :phoneFacebook, :emailFacebook, :emailGoogle, :emailAccoutKit, :sex,:address, :dateOfBirth, :idTokenFcm, :iconUrl, :job, :locale);
 SET @last_id = LAST_INSERT_ID();
INSERT INTO wallet(idCustomer,coinReward,statusVip) VALUES (@last_id,0,1);  ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($customerArray);
            $last_id = $this->conn->lastInsertId();
            $id = (int) $last_id;
            // error
            // $sql = "INSERT INTO customer (name, sex, age) VALUES (?,?,?)";
            // $this->conn->prepare($sql)->execute($customerArray);
            $response[$this->success] = $id;
            $response[$this->message] = "Đăng nhập thành công!";
        } catch (Exception $e) {
            $response[$this->success] = - 1;
            $response[$this->message] = "Đăng nhập không thành công! Thử lại.";
        }
        return $response;
    }

   
}

?>