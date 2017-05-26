<weather-data :user="user" inline-template>
    <div class="panel weather-widget">
        <clip-loader :loading="loading" color="#86471E"></clip-loader>
        <div class="row weather-data" v-if="!loading">
            <div class="col-md-12 temperature">
                <h2>
                    <i class="wi wi-day-cloudy icon"></i>
                    <span class="pull-right" v-if="weather.currently">
                            @{{ weather.currently.temperature }}
                        <sup>
                                <sup>o</sup>
                            </sup>
                        @{{ units[displayUnits]['temperature'] }}
                        <br>
                            <span class="location">
                                <i class="ti-location-pin text-default"></i>
                                @{{ weather.location.city }}, @{{ weather.location.state }} @{{ weather.location.country }}
                            </span>
                        </span>
                </h2>
            </div>
        </div>

        <div class="weather-footer">
            <div class="text-center">
                <div class="col-xs-2 popup" v-for="n in 6">
                    <h5>@{{ getDayOfWeek(n) }}</h5>
                    <i class="wi wi-day-lightning"></i>
                    <p>21o C</p>
                </div>
            </div>
        </div>
    {{--</div>--}}
    {{--<div class="panel-heading">--}}
    {{--Weather--}}
    {{--<a href="{{action('WeatherMapController@index')}}" class="btn btn-primary pull-right">--}}
    {{--View Map--}}
    {{--</a>--}}
    {{--</div>--}}

    {{--<div class="panel-body">--}}
    {{--<weather-data :user="user" inline-template >--}}
    {{--<div>--}}
    {{--<clip-loader :loading="loading" color="#86471E"></clip-loader>--}}
    {{--<div v-if="!loading">--}}
    {{--<div class="pull-right">--}}
    {{--<button class="btn btn-primary" :class="{active: displayUnits == 'us'}" @click="changeUnits('us')">--}}
    {{--US--}}
    {{--</button>--}}
    {{--<button class="btn btn-primary" :class="{active: displayUnits == 'si'}" @click="changeUnits('si')">--}}
    {{--SI--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--<dl class="dl-horizontal" v-if="weather.loaded">--}}
    {{--<dt>Temperature</dt><dd>@{{weather.currently['temperature']}} @{{ units[displayUnits]['temperature'] }}</dd>--}}
    {{--<dt>Wind Speed</dt><dd>@{{weather.currently['windSpeed']}} @{{ units[displayUnits]['windSpeed'] }}</dd>--}}
    {{--<dt>Humidity</dt><dd>@{{weather.currently['humidity'] * 100}} @{{ units[displayUnits]['humidity'] }}</dd>--}}
    {{--<dt>Visibility</dt><dd>@{{weather.currently['visibility']}} @{{ units[displayUnits]['visibility'] }}</dd>--}}
    {{--</dl>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</weather-data>--}}
    {{--</div>--}}
</weather-data>