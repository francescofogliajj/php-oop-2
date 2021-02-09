<?php

  require_once __DIR__ . "/Product.php";

  class Phone extends Product  {

    public $os;
    private $operator;

    function __construct($brand, $model, $type, $price, $os, $operator) {
      parent::__construct($brand, $model, $type, $price);
      $this->os = $os;
      $this->operator = $operator;
    }

    public function getOs() {
      return $this->os;
    }

    public function getOperator() {
      return $this->operator;
    }

  }

?>
