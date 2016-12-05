@extends('layouts.app')

@section('content')
<div class="products container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Applications History</h2>
      <ul class="list-group">
        @foreach ($purchases as $appl)
          <li class="list-group-item">
            <h3>{{ $appl->location }}</h3>
            <h4>{{ $appl->purpose }}</h4>
            <table class="table">
              <tr>
                <td>Date</td>
                <td>{{ date('d/m/Y', strtotime($appl->from_at)).' ~ '.date('d/m/Y', strtotime($appl->until_at)) }}</td>
              </tr>
              <tr>
                <td>No of Lot</td>
                <td>{{ $appl->quantity_lot }}</td>
              </tr>
              <tr>
                <td>Duration</td>
                <td>{{ $appl->duration.($appl->duration > 1 ? ' days' : ' day') }}</td>
              </tr>
              <tr>
                <td>Approved</td>
                <td>{{ $appl->paid ? 'Yes' : 'No' }}</td>
              </tr>
              <tr>
                <td>Paid</td>
                <td>{{ $appl->paid ? 'Yes' : 'No' }}</td>
              </tr>
              <tr>
                <td>Total</td>
                <td>RM{{ $appl->price }}</td>
              </tr>
            </table>
            <button class="btn btn-primary">Make Payment</button>
            <button class="btn btn-default">Delete Application</button>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
