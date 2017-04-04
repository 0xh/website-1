@extends('layouts.app')

@section('dashboard')
    <div class="panel panel-default">
        <div class="panel-heading">
            Weather Map
        </div>

        <div class="panel-body">
            <iframe width='100%' frameBorder='0' style='height: 60vh; margin: 25px 0;' src='https://maps.darksky.net/@temperature,-14.519,27.560,6?embed=true&timeControl=true&fieldControl=true&defaultField=temperature&defaultUnits=_f'></iframe>
        </div>
    </div>
@endsection