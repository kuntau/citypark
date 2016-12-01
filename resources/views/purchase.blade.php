@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Purchase Form</h2>
          <form method="POST" action="{{ url('/purchase') }}" class="form form-horizontal">
      <div class="panel panel-default">
        <div class="panel-heading"><h4>Customer Details</h4></div>
        <div class="panel-body">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
              <label for="product-title" class="control-label col-xs-2">Product</label>
              <div class="col-xs-10">
                <input id="product-title" name="product-title" type="text" class="form-control" value="{{ $product->title }}" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="product-price" class="control-label col-xs-2">Price</label>
              <div class="col-xs-10">
                <div class="input-group">
                  <div class="input-group-addon">RM</div>
                  <input type="text" id="product-price" name="product-price" class="form-control" value="{{ $product->price }}" readonly>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="user-name" class="control-label col-xs-2">Name</label>
              <div class="col-xs-10">
                <input id="user-name" name="user-name" type="text" class="form-control" value="{{ Auth::user()->name }}">
              </div>
            </div>

            <div class="form-group">
              <label for="user-company-name" class="control-label col-xs-2">Company Name</label>
              <div class="col-xs-10">
                <input id="user-company-name" name="user-company-name" type="text" class="form-control" value="{{ Auth::user()->company_name }}">
              </div>
            </div>

            <div class="form-group">
              <label for="user-company-address" class="control-label col-xs-2">Company Address</label>
              <div class="col-xs-10">
                <textarea id="user-company-address" rows="4" name="user-company-address" type="text" class="form-control">{{ Auth::user()->company_address }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="user-email" class="control-label col-xs-2">E-Mail</label>
              <div class="col-xs-10">
                <input id="user-email" name="user-email" type="text" class="form-control" value="{{ Auth::user()->email }}">
              </div>
            </div>

            <div class="form-group">
              <label for="datepicker" class="control-label col-xs-2">Duration</label>
              <div class="col-xs-10">
                <div id="datepicker" class="input-daterange input-group">
                  <input class="input-sm form-control" type="text" id="start" />
                  <span class="input-group-addon">To</span>
                  <input class="input-sm form-control" type="text" id="end">
                </div>
              </div>
            </div>

            <hr />
        </div> <!-- end panel body -->
      </div> <!-- end panel -->
      <div class="panel panel-default">
        <div class="panel-heading"><h4>Customer Details</h4></div>
        <div class="panel-body">

            <div class="form-group">
              <label for="total-price" class="control-label col-xs-2">Total</label>
              <div class="col-sm-3">
                <div class="input-group">
                  <div class="input-group-addon">RM</div>
                  <input type="text" id="total-price" name="total-price" class="form-control" value="{{ $product->price }}" readonly>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-2 col-xs-offset-2">
                <button class="btn btn-primary">Purchase</button>
              </div>
            </div>
        </div> <!-- end panel body -->
      </div> <!-- end panel -->
          </form>
    </div>
  </div>
</div>
@endsection
