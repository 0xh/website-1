<?php

namespace App\Weather;

interface WeatherGatewayInterface {

	public function __construct(array $options = null);

	public function getWeatherData();
}