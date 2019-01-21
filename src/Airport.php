<?php
declare(strict_types=1);

final class Airport
{
  var $capacity;
  var $hangar = 0;
  public function __construct($capacity = 20)
  {
    $this->capacity = $capacity;
  }

  public function capacity()
  {
    return $this->capacity;
  }

  public function isFull()
  {
    if($this->hangar >= $this->capacity) {
      return true;
    } else {
      return false;
    }
  }

  public function landPlane()
  {
    $this->hangar += 1;
  }

  public function takeOffPlane()
  {
    $this->hangar -= 1;
  }
}
?>
