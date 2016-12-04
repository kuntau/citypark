@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Application Form</h2>
      <div class="panel panel-primary">
        <div class="panel-heading" data-toggle="collapse" data-target="#customer-details-body">
          <div class="panel-title">Customer Details</div>
        </div>
        <div class="panel-body collapse" id="customer-details-body">
          <form class="form-horizontal">

            <div class="form-group">
              <label for="user-name" class="control-label col-xs-3">Name</label>
              <div class="col-xs-9">
                <input id="user-name" name="user-name" type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="user-company-name" class="control-label col-xs-3">Company Name</label>
              <div class="col-xs-9">
                <input id="user-company-name" name="user-company-name" type="text" class="form-control" value="{{ Auth::user()->company_name }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="user-company-address" class="control-label col-xs-3">Company Address</label>
              <div class="col-xs-9">
                <textarea id="user-company-address" rows="4" name="user-company-address" type="text" class="form-control" readonly>{{ Auth::user()->company_address }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="user-email" class="control-label col-xs-3">E-Mail</label>
              <div class="col-xs-9">
                <input id="user-email" name="user-email" type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="user-phone-cell" class="control-label col-xs-3">Telephone (HP)</label>
              <div class="col-xs-3">
                <input id="user-phone-cell" name="user-phone-cell" type="text" class="form-control" value="{{ Auth::user()->phone_cell }}" readonly>
              </div>
              <label for="user-phone-office" class="control-label col-xs-3">Telephone (Office)</label>
              <div class="col-xs-3">
                <input id="user-phone-office" name="user-phone-office" type="text" class="form-control" value="{{ Auth::user()->phone_office }}" readonly>
              </div>
            </div>

          </form>
        </div> <!-- end panel body -->
      </div> <!-- end panel -->

      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="panel-title">Rental Details</div>
        </div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/purchase') }}" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" id="duration" name="duration" value="1">
            <div class="form-group">
              <label for="product-title" class="control-label col-xs-2">Product</label>
              <div class="col-xs-10">
                <input id="product-title" name="product-title" type="text" class="form-control" value="{{ $product->title }}" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="base-price" class="control-label col-xs-2">Rate</label>
              <div class="col-xs-10">
                <div class="input-group">
                  <div class="input-group-addon">RM</div>
                  <input type="text" id="base-price" class="form-control" value="{{ $product->price }}" readonly>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="purpose" class="control-label col-xs-2">Purpose</label>
              <div class="col-xs-10">
                <select id="purpose" name="purpose" class="form-control">
                  <option value="Promotion Booth">Promotion Booth</option>
                  <option value="Religious Activity">Religious Activity</option>
                  <option value="Dumpster">Dumpster</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="location" class="control-label col-xs-2">Location</label>
              <div class="col-xs-10">
                <input id="location" name="location" type="text" class="form-control" value="wangsa maju" required autofocus>
              </div>
            </div>

            <div class="form-group">
              <label for="quantity_lot" class="control-label col-xs-2">No. of Lot</label>
              <div class="col-xs-10">
                <input id="quantity_lot" name="quantity_lot" type="number" class="form-control" value="2" required>
              </div>
            </div>

            <div class="form-group">
              <label for="datepicker" class="control-label col-xs-2">Date</label>
              <div class="col-xs-10">
                <div id="datepicker" class="input-daterange input-group">
                  <input class="input-sm form-control" type="text" name="from_at" id="from_at" value="{{ date('d/m/Y')}}" required>
                  <span class="input-group-addon">~</span>
                  <input class="input-sm form-control" type="text" name="until_at" id="until_at" value="{{ date('d/m/Y')}}" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="price" class="control-label col-xs-2">Total</label>
              <div class="col-sm-3">
                <div class="input-group">
                  <div class="input-group-addon">RM</div>
                  <input type="text" id="price" name="price" class="form-control" value="{{ $product->price }}" readonly>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-2 col-xs-offset-2">
                <button class="btn btn-primary">Submit Application</button>
              </div>
            </div>
          </form>
        </div> <!-- end panel body -->
      </div> <!-- end panel -->
    </div>
  </div>
</div>
@endsection

@section('extrajs')
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/purchase.js"></script>
@endsection
