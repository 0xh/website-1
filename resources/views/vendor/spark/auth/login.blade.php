@extends('spark::layouts.layout_2')

@section("styles")
    <link rel="stylesheet" type="text/css" href="/css/login.css">
@endsection

@section("title")
    Login
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-form">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <h2 class="text-center">
                            <img src="/img/color-logo.png" alt="Logo" height="100px">
                            Agrisave
                        </h2>
                    </div>
                    <div class="panel-body">
                        @include('spark::shared.errors')
                        <form class="form-horizontal" role="form" method="POST" action="/login">
                            {{ csrf_field() }}
                            <!-- E-Mail Address -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus placeholder="E-mail">
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <!-- Remember Me -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Login Button -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ url('/password/reset') }}">Forgot Password?</a>
                                <span class="pull-right sign-up">New ? <a href="{{ url('/register') }}">Register</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
