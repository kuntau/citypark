@extends('layouts.app')

@section('content')
<div class="products container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>History</h2>
      <ul class="list-group">
      @if (!count($purchases))
        <p>You don't have any purchase yet. Make one!</p>
      @endif
        @foreach ($purchases as $appl)
          <li class="list-group-item">
            <div data-toggle="collapse" data-target="#purchase-{{ $appl->id }}">
              <h3>{{ $appl->location }}</h3>
              {{-- <h3>{{ $appl->location }}</h3> --}}
              <h4>{{ $appl->purpose }}</h4>
            </div>
            <div id="purchase-{{ $appl->id }}" class="collapse in">
              <table class="table">
                <tr>
                  <td>Date</td>
                  {{-- <td>{{ date('d/m/Y', strtotime($appl->from_at)).' ~ '.date('d/m/Y', strtotime($appl->until_at)) }}</td> --}}
                  @if ($appl->duration > 1)
                  <td>{{ $appl->from_at->format('d/m/Y').' ~ '.$appl->until_at->format('d/m/Y') }}</td>
                  @else
                  <td>{{ $appl->from_at->format('d/m/Y') }}</td>
                  @endif
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
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
