<?php

class StoreDAO {

    private $idStore;
    private $nameStore;
    private $phone;
    private $email;
    private $address;
    private $createAt;
    private $updateAt;
    private $optionCategory;
    private $idUser;
    
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

    public function create_store($param1, $param2, $param3, $param4, $param5) {
        
    try {
        
        $sql = "INSERT INTO $tbl_store (nameStore, phone, email, address, optionCategory) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->bindParam(1, $param1, PDO::PARAM_STR);
        $stmt->bindParam(2, $param2, PDO::PARAM_STR);
        $stmt->bindParam(3, $param3, PDO::PARAM_STR);
        $stmt->bindParam(4, $param4, PDO::PARAM_STR);
        $stmt->bindParam(5, $param5, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        // success
        $response[$this->success] = 1;
        $response[$this->message] = $this->success;
    }catch(PDOException $e)
    {
        $response[$this->success] = 0;
        $response[$this->message] = $e->getMessage();
    }
        return $response;
    }
    
    public function update_store($param) {
        
    }

    public function get_store_info($param) {
       $dem=0;
        // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
        try{
        $sql=" SELECT * FROM tbl_store where idUser=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $param, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();

        /*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
        foreach ($resultSet as $row) {
            $dem=$dem+1;
        }
        $response["category"]=$resultSet;
        // success
        
           $response[$this->success] = 1;
            $response[$this->message] = $dem;
        }catch(PDOException $e){
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
         return $response;
    }
   
}

?>