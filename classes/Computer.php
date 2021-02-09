<?php

  require_once __DIR__ . "/Product.php";

  class Computer extends Product  {

    public $ssd;
    private $guarantee;

    function __construct($brand, $model, $type, $price, $ssd, $guarantee) {
      parent::__construct($brand, $model, $type, $price);
      $this->ssd = $ssd;
      $this->guarantee = $guarantee;
    }

    public function getSsd() {
      return $this->ssd;
    }

    public function getGuarantee() {
      return $this->guarantee;
    }

  }

?>
