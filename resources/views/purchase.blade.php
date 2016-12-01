@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Purchase</h2>
      <div class="panel panel-default">
        <!-- <div class="panel-heading">Purchase</div> -->
        <div class="panel-body">
          <form method="POST" action="{{ url('/purchase') }}">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
              <label for="">Product</label>
              <input type="text" class="form-control" value="{{ $product->title }}" disabled="">
            </div>
            <div class="form-group">
              <label for="product-price">Price</label>
              <div class="input-group">
                <div class="input-group-addon">RM</div>
                <input type="text" id="product-price" name="product-price" class="form-control" value="{{ $product->price }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="">Duration</label>
              <div id="datepicker" class="input-daterange input-group">
                <input class="input-sm form-control" type="text" id="start" />
                <span class="input-group-addon">To</span>
                <input class="input-sm form-control" type="text" id="end">
              </div>
            </div>
            <hr />
            <div class="form-group">
              <label for="">Total</label>
              <div class="row">
                <div class="col-sm-3">
                  <div class="input-group">
                    <div class="input-group-addon">RM</div>
                    <input type="text" id="totalPrice" name="totalPrice" class="form-control" value="{{ $product->price }}" readonly>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Purchase</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
