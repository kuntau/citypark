@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
              <input type="text" class="form-control" id="from" name="from">
              <input type="text" class="form-control" id="to" name="to">
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
@endsection