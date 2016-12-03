@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
        <div class="panel-body">
          <form class="form-horizontal">

            <div class="form-group">
              <label for="user-name" class="control-label col-xs-3">Name</label>
              <div class="col-xs-9">
                <input id="user-name" name="user-name" type="text" class="form-control" value="{{ Auth::user()->name }}">
              </div>
            </div>

            <div class="form-group">
              <label for="user-company-name" class="control-label col-xs-3">Company Name</label>
              <div class="col-xs-9">
                <input id="user-company-name" name="user-company-name" type="text" class="form-control" value="{{ Auth::user()->company_name }}">
              </div>
            </div>

            <div class="form-group">
              <label for="user-company-address" class="control-label col-xs-3">Company Address</label>
              <div class="col-xs-9">
                <textarea id="user-company-address" rows="4" name="user-company-address" type="text" class="form-control">{{ Auth::user()->company_address }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="user-email" class="control-label col-xs-3">E-Mail</label>
              <div class="col-xs-9">
                <input id="user-email" name="user-email" type="text" class="form-control" value="{{ Auth::user()->email }}">
              </div>
            </div>

            <div class="form-group">
              <label for="user-phone-cell" class="control-label col-xs-3">Telephone (HP)</label>
              <div class="col-xs-3">
                <input id="user-phone-cell" name="user-phone-cell" type="text" class="form-control" value="{{ Auth::user()->phone_cell }}">
              </div>
              <label for="user-phone-office" class="control-label col-xs-3">Telephone (Office)</label>
              <div class="col-xs-3">
                <input id="user-phone-office" name="user-phone-office" type="text" class="form-control" value="{{ Auth::user()->phone_office }}">
              </div>
            </div>

            <hr>
            <div class="form-group">
              <div class="col-xs-3 col-xs-offset-9">
                <button class="btn btn-primary" disabled="disabled">Update Profile</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
