@extends('layouts.app')

@section('dashboard')
    <div class="panel panel-default">
        <div class="panel-heading">
            Weather
            <a href="{{action('WeatherMapController@index')}}" class="btn btn-primary pull-right">
                View Map
            </a>
        </div>

        <div class="panel-body">
            <weather-data :user="user" inline-template>
                <div></div>
            </weather-data>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Financing</div>

        <div class="panel-body">

        </div>
    </div>
@endsection