<?php
  declare(strict_types=1);
  require __DIR__ . "/../src/Plane.php";
  require_once __DIR__ . "/../src/Airport.php";

  use PHPUnit\Framework\TestCase;

  final class TestPlane extends TestCase
  {

    protected function setUp()
    {
      $this->plane = new Plane;
      $this->airport = new Airport(1);
    }

    public function testPlaneStatusDefaultsToLanded()
    {
      $this->assertEquals('Landed', $this->plane->status());
    }

    public function testStatusIsChangesToFlyingWhenPlaneTakesOff()
    {
      $this->plane->takeOff($this->airport);
      $this->assertEquals('Flying', $this->plane->status());
    }

    public function testPlaneCannotLandIfAirportIsFull()
    {
      $this->plane->land($this->airport);
      $this->assertEquals('Airport is full, cannot land plane', $this->plane->land($this->airport));
    }

    public function testStatusChangesToLandedWhenPlaneLands()
    {
      $this->plane->takeOff($this->airport);
      $this->plane->land($this->airport);
      $this->assertEquals('Landed', $this->plane->status());
    }
  }
?>
