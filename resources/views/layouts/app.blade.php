@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @yield('dashboard')
                </div>
            </div>
        </div>
    </home>
@endsection