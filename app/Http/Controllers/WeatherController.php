<?php

namespace App\Http\Controllers;

use App\Weather\FakeWeatherGateway;
use App\Weather\WeatherGateway;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{

	public function index() {
		if($this->request->wantsJson() || $this->request->ajax()) {
			return response()->json((new WeatherGateway())->getWeatherData());
		}
    }
}
