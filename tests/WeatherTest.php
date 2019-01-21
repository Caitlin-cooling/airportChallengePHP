<?php
  declare(strict_types=1);
  require __DIR__ . "/../src/Weather.php";

  use PHPUnit\Framework\TestCase;

  final class TestWeather extends TestCase
  {
    public function testWeatherIsSunny()
    {
      $weather = new Weather;
      $this-> assertEquals('Sunny', $weather->today());
    }
  }

?>
