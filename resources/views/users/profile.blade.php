@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/users') }}" class="form-horizontal">

            {{ csrf_field() }}
            <div class="form-group">
              <label for="name" class="control-label col-xs-3">Name</label>
              <div class="col-xs-9">
                <input id="name" name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
              </div>
            </div>

            <div class="form-group">
              <label for="company_name" class="control-label col-xs-3">Company Name</label>
              <div class="col-xs-9">
                <input id="company_name" name="company_name" type="text" class="form-control" value="{{ Auth::user()->company_name }}">
              </div>
            </div>

            <div class="form-group">
              <label for="company_address" class="control-label col-xs-3">Company Address</label>
              <div class="col-xs-9">
                <textarea id="company_address" rows="4" name="company_address" type="text" class="form-control">{{ Auth::user()->company_address }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="control-label col-xs-3">E-Mail</label>
              <div class="col-xs-9">
                <input id="email" name="email" type="text" class="form-control" value="{{ Auth::user()->email }}">
              </div>
            </div>

            <div class="form-group">
              <label for="phone_cell" class="control-label col-xs-3">Telephone (HP)</label>
              <div class="col-xs-3">
                <input id="phone_cell" name="phone_cell" type="text" class="form-control" value="{{ Auth::user()->phone_cell }}">
              </div>
              <label for="phone_office" class="control-label col-xs-3">Telephone (Office)</label>
              <div class="col-xs-3">
                <input id="phone_office" name="phone_office" type="text" class="form-control" value="{{ Auth::user()->phone_office }}">
              </div>
            </div>

            <hr>
            <div class="form-group">
              <div class="col-xs-3 col-xs-offset-9">
                <button class="btn btn-primary" >Update Profile</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
