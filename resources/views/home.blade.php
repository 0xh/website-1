@extends('layouts.app')

@section("title") Home @endsection

@section('breadcrumb')
    <h1>Home</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/">
                <i class="fa fa-fw ti-home"></i> Home
            </a>
        </li>
    </ol>
@endsection

@section('dashboard')
    @include('partials.weather')

    <div class="panel panel-default">
        <div class="panel-heading">Growth Tracker</div>

        <div class="panel-body">
            {{--<growth-planning>--}}
                <h3>Coming Soon!</h3>
            {{--</growth-planning>--}}
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Financial Planning</div>

        <div class="panel-body">
            <h3>Coming Soon!</h3>
        </div>
    </div>

    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">Financing</div>--}}

        {{--<div class="panel-body">--}}

        {{--</div>--}}
    {{--</div>--}}
@endsection