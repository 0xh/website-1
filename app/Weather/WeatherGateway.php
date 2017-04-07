<?php

namespace App\Weather;

use GuzzleHttp\Client;

class WeatherGateway {

	private $client, $location, $options;

	public function __construct(array $options = null) {
		$this->client = new Client();
		$ip = geoip()->getLocation();
		$this->location = "{$ip['lat']},{$ip['lon']}";
		$this->options = $options;
	}

	public function getWeatherData() {
		return json_decode($this->client->get($this->getAPIUrl() . $this->getUrlOptions())->getBody()->getContents(),true);
	}

	public function getAPIUrl() {
		return "https://api.darksky.net/forecast/" . config('services.darksky.secret_key') . "/{$this->location}";
	}

	public function getUrlOptions() {
		return $this->options ? "?{$this->getOptions()}" : '';
	}

	public function getExcludes() {
		return implode(',', $this->options['excludes']);
	}

	public function getOptions() {
		if(array_key_exists('excludes', $this->options)) {
			$this->options['excludes'] = $this->getExcludes();
		}

		return implode('&', $this->options);
	}
}