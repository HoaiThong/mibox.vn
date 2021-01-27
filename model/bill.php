<?php

class Bill {

    private $idBill;
    private $idProduct;
    private $idStore;
    private $idUser;
    private $quantity;
    //---tinh trang duyet don
    private $state;
    private $time;
    private $isPay;


    public $tagCreateAt = "createAt";
    public $tagUpdateAt = "updateAt";

    function __construct() {
        
    }
    function getIdBill() {
        return $this->idBill;
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function getIdStore() {
        return $this->idStore;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getState() {
        return $this->state;
    }

    function getTime() {
        return $this->time;
    }

    function getIsPay() {
        return $this->isPay;
    }

    function getTagCreateAt() {
        return $this->tagCreateAt;
    }

    function getTagUpdateAt() {
        return $this->tagUpdateAt;
    }

    function setIdBill($idBill): void {
        $this->idBill = $idBill;
    }

    function setIdProduct($idProduct): void {
        $this->idProduct = $idProduct;
    }

    function setIdStore($idStore): void {
        $this->idStore = $idStore;
    }

    function setIdUser($idUser): void {
        $this->idUser = $idUser;
    }

    function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    function setState($state): void {
        $this->state = $state;
    }

    function setTime($time): void {
        $this->time = $time;
    }

    function setIsPay($isPay): void {
        $this->isPay = $isPay;
    }

    function setTagCreateAt($tagCreateAt): void {
        $this->tagCreateAt = $tagCreateAt;
    }

    function setTagUpdateAt($tagUpdateAt): void {
        $this->tagUpdateAt = $tagUpdateAt;
    }



}

?>