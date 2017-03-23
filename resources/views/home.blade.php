@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Weather</div>

                    <div class="panel-body">

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Financing</div>

                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu</div>

                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</home>
@endsection
