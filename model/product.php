<?php

class User {

    private $idProduct;
    private $skuProduct;
    private $nameProduct;
    private $iconLink;
    private $imageSource;
    private $description;
    private $quantity;
    //--- Giá dropship ---
    private $dropPrices;
    //--- Giá gốc ---
    private $originalPrices;
    //--- Giá bán buôn ---
    private $wholesalePrices;
    //--- giá bán lẻ ---
    private $retailPrices;
    //--- Phân loại hàng hóa ---
    private $kind;
    private $createAt;
    private $updateAt;
    
    public $tagIdProduct = "idProduct";
    public $tagSkuProduct = "skuProduct";
    public $tagNameProduct = "nameProduct";
    public $tagIconLink = "iconLink";
    public $tagImageSource = "imageSource";
    public $tagDescription = "description";
    public $tagQuantity = "quantity";
    public $tagDropPrices = "dropPrices";
    public $tagOriginalPrices = "originalPrices";
    public $tagWholesalePrices = "wholesalePrices";
    
    

    function __construct() {
        
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function getSkuProduct() {
        return $this->skuProduct;
    }

    function getNameProduct() {
        return $this->nameProduct;
    }

    function getIconLink() {
        return $this->iconLink;
    }

    function getImageSource() {
        return $this->imageSource;
    }

    function getDescription() {
        return $this->description;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getDropPrices() {
        return $this->dropPrices;
    }

    function getOriginalPrices() {
        return $this->originalPrices;
    }

    function getWholesalePrices() {
        return $this->wholesalePrices;
    }

    function getRetailPrices() {
        return $this->retailPrices;
    }

    function getKind() {
        return $this->kind;
    }

    function getCreateAt() {
        return $this->createAt;
    }

    function getUpdateAt() {
        return $this->updateAt;
    }

    function setIdProduct($idProduct): void {
        $this->idProduct = $idProduct;
    }

    function setSkuProduct($skuProduct): void {
        $this->skuProduct = $skuProduct;
    }

    function setNameProduct($nameProduct): void {
        $this->nameProduct = $nameProduct;
    }

    function setIconLink($iconLink): void {
        $this->iconLink = $iconLink;
    }

    function setImageSource($imageSource): void {
        $this->imageSource = $imageSource;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    function setDropPrices($dropPrices): void {
        $this->dropPrices = $dropPrices;
    }

    function setOriginalPrices($originalPrices): void {
        $this->originalPrices = $originalPrices;
    }

    function setWholesalePrices($wholesalePrices): void {
        $this->wholesalePrices = $wholesalePrices;
    }

    function setRetailPrices($retailPrices): void {
        $this->retailPrices = $retailPrices;
    }

    function setKind($kind): void {
        $this->kind = $kind;
    }

    function setCreateAt($createAt): void {
        $this->createAt = $createAt;
    }

    function setUpdateAt($updateAt): void {
        $this->updateAt = $updateAt;
    }

}

?>