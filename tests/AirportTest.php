<?php
  declare(strict_types=1);
  require __DIR__ . "/../src/Airport.php";

  use PHPUnit\Framework\TestCase;

  final class AirportTest extends TestCase
  {
    public function testAirportHasDefaultCapacityOf20()
    {
      $airport = new Airport;
      $this -> assertEquals(20, $airport->capacity());
    }

    public function testAirportCapacityCanBeChanged()
    {
      $airport = new Airport(5);
      $this -> assertEquals(5, $airport->capacity());
    }

    public function testAirportIsNotFull()
    {
      $airport = new Airport;
      $this->assertEquals(false, $airport->isFull());
    }

    public function testAirportIsFullWhen3PlanesHaveLanded()
    {
      $airport = new Airport(3);
      $airport->landPlane();
      $airport->landPlane();
      $airport->landPlane();
      $this->assertEquals(true, $airport->isFull());
    }

    public function testAirportIsNotFullWhen3PlanesHaveLandedAndOneHasTakenOff()
    {
      $airport = new Airport(3);
      $airport->landPlane();
      $airport->landPlane();
      $airport->landPlane();
      $airport->takeOffPlane();
      $this->assertEquals(false, $airport->isFull());
    }
  }
?>
