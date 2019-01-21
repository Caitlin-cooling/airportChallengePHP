<?php
  declare(strict_types=1);
  require __DIR__ . "/../src/Weather.php";

  use PHPUnit\Framework\TestCase;

  final class TestWeather extends TestCase
  {
    public function testWeatherIsSunny()
    {
      $weather = new Weather;
      $stub = $this->createMock(ArrayObject::class);
      $stub->method('array_rand')
           ->willReturn('Sunny');
      $this-> assertEquals('Sunny', $weather->today());
    }
  }

?>
