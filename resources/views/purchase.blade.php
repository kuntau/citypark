@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                @if (Auth::guest())
                    Please log in to interact with your account!
                @else
                    You are logged in!
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection