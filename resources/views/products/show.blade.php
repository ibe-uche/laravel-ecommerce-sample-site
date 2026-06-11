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

                <form method="POST" action="{{ route('cart.add', $product->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>

            </div>

        </div>

    </div>
@endsection
