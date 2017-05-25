@extends('spark::layouts.layout_2') @section("title") Reset Password @endsection @section("styles")
<link rel="stylesheet" type="text/css" href="/css/login.css"> @endsection
<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login-form">
            <div class="panel panel-default">
                <div class="panel-header">
                    <h2 class="text-center">
                    <img src="/img/mono-logo.png" alt="Logo">
                </h2>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
                        <!-- E-Mail Address -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus placeholder="E-Mail Address"> @if ($errors->has('email'))
                                <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span> @endif
                            </div>
                        </div>
                        <!-- Send Password Reset Link Button -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-btn fa-envelope"></i>&nbsp;&nbsp;Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
