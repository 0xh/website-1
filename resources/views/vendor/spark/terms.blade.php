@extends('spark::layouts.app') @section("title") Terms @endsection @section('breadcrumb')
<h1>Terms</h1>
<ol class="breadcrumb">
    <li>
        <a href="/terms">
            <i class="fa fa-fw ti-home"></i> Terms
        </a>
    </li>
</ol>
@endsection @section('content')
<div class="container">
    <!-- Application Dashboard -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Terms Of Service</div>
                <div class="panel-body terms-of-service">
                    {!! $terms !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
