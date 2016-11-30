@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('company-name') ? ' has-error' : '' }}">
                            <label for="company-name" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="company-name" type="text" class="form-control" name="company-name" required>

                                @if ($errors->has('company-name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company-address') ? ' has-error' : '' }}">
                            <label for="company-address" class="col-md-4 control-label">Company Address</label>

                            <div class="col-md-6">
                              <textarea id="company-address" class="form-control" name="company-address" required></textarea>

                                @if ($errors->has('company-address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company-address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneOffice') ? ' has-error' : '' }}">
                            <label for="phoneOffice" class="col-md-4 control-label">Telephone No. (Office)</label>

                            <div class="col-md-6">
                                <input id="phoneOffice" type="text" class="form-control" name="phoneOffice" required>

                                @if ($errors->has('phoneOffice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneOffice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneCell') ? ' has-error' : '' }}">
                            <label for="phoneCell" class="col-md-4 control-label">Telephone No. (HP)</label>

                            <div class="col-md-6">
                                <input id="phoneCell" type="text" class="form-control" name="phoneCell" required>

                                @if ($errors->has('phoneCell'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneCell') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
