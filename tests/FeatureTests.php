<?php
  declare(strict_types=1);
  require_once('classes.php');

  use PHPUnit\Framework\TestCase;

  final class FeatureTests extends TestCase
  {
    protected function setUp()
    {
      $this->airport = new Airport;
      $this->plane = new Plane;
      $this->weather = new Weather;
    }

    public function testPlaneCanLandAtAirport()
    {
      $this->plane->takeOff($this->airport, $this->weather);
      $this->plane->land($this->airport, $this->weather);
      $this->assertEquals('Landed', $this->plane->status());
    }

    public function testPlaneCanTakeOffFromAnAirport()
    {
      $this->plane->takeOff($this->airport, $this->weather);
      $this->assertEquals('Flying', $this->plane->status());
      $this->assertEquals(-1, $this->airport->hangarCount());
    }

    public function testDefaultAirportCapacityCanBeChanged()
    {
      $airport = new Airport(5);
      $this->assertEquals(5, $airport->capacity());
    }
  }
 ?>
