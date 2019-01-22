<?php
  declare(strict_types=1);
  require __DIR__ . "/../src/Plane.php";
  require_once __DIR__ . "/../src/Airport.php";

  use PHPUnit\Framework\TestCase;

  final class TestPlane extends TestCase
  {
    public function testPlaneStatusDefaultsToLanded()
    {
      $plane = new Plane;
      $this->assertEquals('Landed', $plane->status());
    }

    public function testStatusIsChangesToFlyingWhenPlaneTakesOff()
    {
      $plane = new Plane;
      $airport = new Airport();
      $plane->takeOff($airport);
      $this->assertEquals('Flying', $plane->status());
    }

    public function testPlaneCannotLandIfAirportIsFull()
    {
      $plane = new Plane;
      $airport = new Airport(1);
      $plane->land($airport);
      $this->assertEquals('Airport is full, cannot land plane', $plane->land($airport));
    }

    public function testStatusChangesToLandedWhenPlaneLands()
    {
      $plane = new Plane;
      $airport = new Airport(1);
      $plane->takeOff($airport);
      $plane->land($airport);
      $this->assertEquals('Landed', $plane->status());
    }
  }
?>
