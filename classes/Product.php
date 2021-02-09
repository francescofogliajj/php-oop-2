<?php

  class Product  {

    public $brand;
    public $model;
    public $type;
    private $price;

    function __construct($brand, $model, $type, $price) {
      $this->brand = $brand;
      $this->model = $model;
      $this->type = $type;
      $this->price = $price;
    }

    public function getInfo() {
      return $this->brand. " " .$this->model. " " .$this->type;
    }

    public function getPrice() {
      return $this->price;
    }

  }

?>
