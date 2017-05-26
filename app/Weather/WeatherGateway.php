<?php

namespace App\Weather;

use GuzzleHttp\Client;

class WeatherGateway {

	private $client, $locationString, $options, $location;

	public function __construct(array $options = null) {
		$this->client = new Client();
		$ip = geoip()->getLocation();
		$this->location = $this->getLocation($ip);
		$this->locationString = "{$ip['lat']},{$ip['lon']}";
		$this->options = $options;
	}

	public function getWeatherData() {
		return array_merge(json_decode($this->client->get($this->getAPIUrl() . $this->getUrlOptions())->getBody()->getContents(),true), ['location' => $this->location]);
	}

	public function getAPIUrl() {
		return "https://api.darksky.net/forecast/" . config('services.darksky.secret_key') . "/{$this->locationString}";
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

	public function getLocation($data) {
		return [
			'city' => $data['city'],
			'state' => $data['state'],
			'country' => $data['country'],
			'continent' => $data['continent']
		];
	}
}