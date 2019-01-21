<?php
  declare(strict_types=1);

  final class Plane
  {
    var $status = 'Landed';
    public function status()
    {
      return $this->status;
    }

    public function takeOff()
    {
      $this->status = 'Flying';
    }

    public function land()
    {
      $this->status = 'Landed';
    }
  }
?>
