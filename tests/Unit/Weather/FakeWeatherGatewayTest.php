<?php

namespace Tests;

use App\Weather\FakeWeatherGateway;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class FakeWeatherGatewayTest extends TestCase {

	//use DatabaseMigrations;

	/**
	  * can get request data
	  * @test
	  */
	function can_get_request_data() {
		$weatherGateway = new FakeWeatherGateway();

		$data = $weatherGateway->getWeatherData();

		dd($data['currently']);
	}

}