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
  }
?>
