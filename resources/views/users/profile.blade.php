@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
        <div class="panel-body">
          <form action="#" class="from-horizontal">
            <div class="form-group">
              <label for="" class="control-label">Name</label>
              <input type="text" class="form-control" value="{{ $user->name }}" readonly>
            </div>
            <div class="form-group">
              <label for="" class="control-label">E-mail</label>
              <input type="text" class="form-control" value="{{ $user->email }}" readonly>
            </div>
            <div class="form-group">
              <label for="" class="control-label">Company</label>
              <input type="text" class="form-control" value="{{ $user->company_name }}" readonly>
            </div>
            <div class="form-group">
              <label for="" class="control-label">Company Address</label>
              <textarea class="form-control" row="3" readonly>{{ $user->company_address }}</textarea>
            </div>
            @if (isset($user->phone_office))
              <div class="form-group">
                <label for="" class="control-label">Phone (Office)</label>
                <input type="text" class="form-control" value="{{ $user->phone_office }}" readonly>
              </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
