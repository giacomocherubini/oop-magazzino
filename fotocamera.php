
<?php

require "prodotto.php";

class fotocamera extends prodotto{

public $marchio;
public $sensore;
public $risoluzioneVideo;
public $megapixels;
public $is_stabilizzata;

  function __construct($marchio, $mega, $id, $price) {
    $this->marchio = $marchio;
    $this->megapixels = $mega;

    parent::__construct("10", "1000");
  }
}

 ?>
