@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="row">

            <div class="col-md-5">
                <img src="{{ $product->image }}" class="img-fluid" alt="{{ $product->name }}">
            </div>

            <div class="col-md-7">

                <h2>{{ $product->name }}</h2>

                <p class="text-muted">
                    {{ $product->description }}
                </p>

                <h4 class="fw-bold">
                    ₦{{ number_format($product->price) }}
                </h4>

                <p>
                    Stock: {{ $product->stock }}
                </p>

            </div>

        </div>

    </div>
@endsection
