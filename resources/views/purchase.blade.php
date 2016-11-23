@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css">
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
              <label for="productPrice">Price</label>
              <div class="input-group">
                <div class="input-group-addon">RM</div>
                <input type="text" id="productPrice" name="productPrice" class="form-control" value="{{ $product->price }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="">Duration</label>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="from" name="from_at" placeholder="Start date" value="{{ date('d/m/Y') }}">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="to" name="until_at" placeholder="End date" value="{{ date('d/m/Y') }}">
                </div>
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
