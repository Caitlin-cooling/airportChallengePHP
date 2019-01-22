<?php
  declare(strict_types=1);
  require_once('classes.php');

  use PHPUnit\Framework\TestCase;

  final class TestPlane extends TestCase
  {

    protected function setUp()
    {
      $this->plane = new Plane;
      $this->fullAirportStub = $this->createMock(Airport::class);
      $this->fullAirportStub->method('isFull')
            ->willReturn(true);
      $this->emptyAirportStub = $this->createMock(Airport::class);
      $this->emptyAirportStub->method('isFull')
            ->willReturn(false);
      $this->stubBadWeather = $this->createMock(Weather::class);
      $this->stubBadWeather->method('today')
           ->willReturn('Stormy');
      $this->stubGoodWeather = $this->createMock(Weather::class);
      $this->stubGoodWeather->method('today')
           ->willReturn('Sunny');
    }

    public function testPlaneStatusDefaultsToLanded()
    {
      $this->assertEquals('Landed', $this->plane->status());
    }

    public function testStatusIsChangesToFlyingWhenPlaneTakesOff()
    {
      $this->plane->takeOff($this->emptyAirportStub, $this->stubGoodWeather);
      $this->assertEquals('Flying', $this->plane->status());
    }

    public function testPlaneCannotTakeOffWhenWeatherIsStormy()
    {
      $this->assertEquals("Weather is stormy, cannot take off plane", $this->plane->takeOff($this->emptyAirportStub, $this->stubBadWeather));
    }

    public function testStatusChangesToLandedWhenPlaneLands()
    {
      $this->plane->takeOff($this->emptyAirportStub, $this->stubGoodWeather);
      $this->plane->land($this->emptyAirportStub, $this->stubGoodWeather);
      $this->assertEquals('Landed', $this->plane->status());
    }

    public function testPlaneCannotLandIfAirportIsFull()
    {
      $this->plane->land($this->emptyAirportStub, $this->stubGoodWeather);
      $this->assertEquals('Airport is full, cannot land plane', $this->plane->land($this->fullAirportStub, $this->stubGoodWeather));
    }

    public function testPlaneCannotLandWhenWeatherIsStormy()
    {
      $this->assertEquals("Weather is stormy, cannot land plane", $this->plane->land($this->emptyAirportStub, $this->stubBadWeather));
    }
  }
?>
