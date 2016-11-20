@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
        <div class="panel-body">
          This is {{ $user->name }} profile registered with {{ $user->email }} email at {{ $user->created_at }}.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection