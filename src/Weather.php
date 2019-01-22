<?php
  declare(strict_types=1);

  class Weather
  {
    var $weatherArray = array('Sunny', 'Sunny', 'Sunny', 'Sunny', 'Stormy');

    public function today()
    {
      $randIndex = array_rand($this->weatherArray);
      return $this->weatherArray[$randIndex];
    }
  }
?>
