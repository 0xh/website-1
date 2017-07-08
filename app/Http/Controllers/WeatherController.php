<?php

namespace App\Http\Controllers;

use App\Weather\FakeWeatherGateway;
use App\Weather\DarkSkyWeatherGateway;
use App\Weather\WeatherGatewayInterface;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{

	public function index($units = null) {
		if($this->request->wantsJson() || $this->request->ajax()) {
			return response()->json(app()->make(WeatherGatewayInterface::class)->getWeatherData());
		}
    }
}
