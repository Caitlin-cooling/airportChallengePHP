<?php
  declare(strict_types=1);
  require_once('classes.php');

  use PHPUnit\Framework\TestCase;

  final class TestAirport extends TestCase
  {

    protected function setUp()
    {
      $this->airport = new Airport;
    }

    public function testAirportHasDefaultCapacityOf20()
    {
      $this -> assertEquals(20, $this->airport->capacity());
    }

    public function testAirportCapacityCanBeChanged()
    {
      $this->airport = new Airport(5);
      $this -> assertEquals(5, $this->airport->capacity());
    }

    public function testAirportIsNotFull()
    {
      $this->airport = new Airport;
      $this->assertEquals(false, $this->airport->isFull());
    }

    public function testAirportIsFullWhen3PlanesHaveLanded()
    {
      $this->airport = new Airport(3);
      $this->airport->landPlane();
      $this->airport->landPlane();
      $this->airport->landPlane();
      $this->assertEquals(true, $this->airport->isFull());
      $this->assertEquals(3, $this->airport->hangarCount());
    }

    public function testAirportIsNotFullWhen3PlanesHaveLandedAndOneHasTakenOff()
    {
      $this->airport = new Airport(3);
      $this->airport->landPlane();
      $this->airport->landPlane();
      $this->airport->landPlane();
      $this->airport->takeOffPlane();
      $this->assertEquals(false, $this->airport->isFull());
      $this->assertEquals(2, $this->airport->hangarCount());
    }
  }
?>
