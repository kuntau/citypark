@extends('layouts.app')

@section('content')
<div class="products container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Applications History</h2>
            <ul class="list-group">
              @foreach ($purchases as $application)
                <li class="list-group-item">
                  <h3>{{ $application->purpose }}</h3>
                  <h4>Location : {{ $application->location }}</h4>
                  <h5>Date : {{ date('d/m/Y', strtotime($application->from_at)).' ~ '.date('d/m/Y', strtotime($application->until_at)) }}</h5>
                  <p>
                    RM {{ $application->price }}<br />
                    Approved: {{ $application->approved ? 'Yes' : 'No' }}<br />
                    Paid: {{ $application->paid ? 'Yes' : 'No' }}<br />
                  </p>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
