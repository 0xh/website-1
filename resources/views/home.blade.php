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
            <weather-data :user="user" inline-template >
                <div>
                    <clip-loader :loading="loading" color="#86471E"></clip-loader>
                    <div v-if="!loading">
                        <div class="pull-right">
                            <button class="btn btn-primary" :class="{active: displayUnits == 'us'}" @click="changeUnits('us')">
                                US
                            </button>
                            <button class="btn btn-primary" :class="{active: displayUnits == 'si'}" @click="changeUnits('si')">
                                SI
                            </button>
                        </div>
                        <dl class="dl-horizontal" v-if="weather.loaded">
                            <dt>Temperature</dt><dd>@{{weather.currently['temperature']}} @{{ units[displayUnits]['temperature'] }}</dd>
                            <dt>Wind Speed</dt><dd>@{{weather.currently['windSpeed']}} @{{ units[displayUnits]['windSpeed'] }}</dd>
                            <dt>Humidity</dt><dd>@{{weather.currently['humidity'] * 100}} @{{ units[displayUnits]['humidity'] }}</dd>
                            <dt>Visibility</dt><dd>@{{weather.currently['visibility']}} @{{ units[displayUnits]['visibility'] }}</dd>
                        </dl>
                    </div>
                </div>
            </weather-data>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Growth Tracker</div>

        <div class="panel-body">
            <growth-planning>
                <h3>Coming Soon!</h3>
            </growth-planning>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Financial Planning</div>

        <div class="panel-body">
            <growth-planning>
                <h3>Coming Soon!</h3>
            </growth-planning>
        </div>
    </div>

    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">Financing</div>--}}

        {{--<div class="panel-body">--}}

        {{--</div>--}}
    {{--</div>--}}
@endsection