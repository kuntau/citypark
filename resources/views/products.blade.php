@extends('layouts.app')

@section('content')
<div class="products container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Pricings</h2>
            <ul class="list-group">
              @foreach ($products as $product)
                <li class="list-group-item">
                  <h3>{{ $product->title }}</h3>
                  <p>
                    RM {{ $product->price }}
                    <a href="{{ url('/purchase', $product->id) }}" class="btn btn-primary pull-right">Buy {{ $product->title }}</a>
                  </p>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
