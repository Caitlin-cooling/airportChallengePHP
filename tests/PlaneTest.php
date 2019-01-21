<?php
  declare(strict_types=1);
  require __DIR__ . "/../src/Plane.php";

  use PHPUnit\Framework\TestCase;

  final class PlaneTest extends TestCase
  {
    public function testPlaneStatusDefaultsToLanded()
    {
      $plane = new Plane;
      $this->assertEquals('Landed', $plane->status());
    }

    public function testStatusIsChangesToFlyingWhenPlaneTakesOff()
    {
      $plane = new Plane;
      $plane->takeOff();
      $this->assertEquals('Flying', $plane->status());
    }
  }
?>
