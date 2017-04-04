<?php

namespace App\Weather;

use GuzzleHttp\Client;

class WeatherGateway {

	private $client, $location;

	public function __construct() {
		$this->client = new Client();
		$ip = geoip()->getLocation();
		$this->location = "{$ip['lat']},{$ip['lon']}";
	}

	public function getWeatherData() {
		return json_decode($this->client->get($this->getAPIUrl())->getBody()->getContents(),true);
	}

	public function getAPIUrl() {
		return "https://api.darksky.net/forecast/" . config('services.darksky.secret_key') . "/{$this->location}";
	}
}