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
          <form action="POST">
            <div class="form-group">
              <label for="">Product</label>
              <input type="text" class="form-control" value="{{ $product->title }}" disabled="">
            </div>
            <div class="form-group">
              <label for="">Price</label>
              <input type="text" class="form-control" value="RM{{ $product->price }}" disabled="">
            </div>
            <div class="form-group">
              <label for="">Duration</label>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="from" name="from" placeholder="Start date">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="to" name="to" placeholder="End date">
                </div>
              </div>
            </div>
            <hr />
            <div class="form-group">
              <label for="">Total @{{ 1 + 1 }}</label>
              <div class="row">
                <div class="col-sm-3">
                  <input type="text" class="form-control" value="RM{{ $product->price * 3 }}" disabled="">
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
