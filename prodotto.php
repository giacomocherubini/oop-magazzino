<?php

class prodotto {

  public $id;
  public $denominazione;
  public $collocazione;
  public $prezzo;

  function __construct($id, $price) {
    $this->id = $id;
    $this->prezzo = $price;

  }
}
?>
