<?php
declare(strict_types=1);

final class Airport
{
  var $capacity;
  public function __construct($capacity = 20)
  {
    $this->capacity = $capacity;
  }

  public function capacity()
  {
    return $this->capacity;
  }
}
?>
