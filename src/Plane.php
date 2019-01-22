<?php
  declare(strict_types=1);
  require_once __DIR__ . "/../src/Airport.php";

  final class Plane
  {
    var $status = 'Landed';
    public function status()
    {
      return $this->status;
    }

    public function takeOff($airport, $weather)
    {
      if($weather->today() === 'Stormy') {
        return "Weather is stormy, cannot take off plane";
      } else {
        $airport->takeOffPlane();
        $this->status = 'Flying';
      }
    }

    public function land($airport, $weather)
    {
      if($airport->isFull()) {
        return 'Airport is full, cannot land plane';
      } elseif ($weather->today() === 'Stormy') {
        return "Weather is stormy, cannot land plane";
      } else {
        $airport->landPlane();
        $this->status = 'Landed';
      }
    }
  }
?>
