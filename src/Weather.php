<?php
  declare(strict_types=1);

  final class Weather
  {
    var $weatherArray = array('Sunny', 'Sunny', 'Sunny', 'Sunny', 'Stormy');

    public function today()
    {
      return $this->weatherArray[1];
    }
  }
?>
