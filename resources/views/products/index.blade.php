@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <h2 class="mb-4">Products</h2>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">

                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ url('/products/' . $product->id) }}" class="text-decoration-none">
                                    {{ $product->name }}
                                </a>
                            </h5>

                            <p class="card-text">
                                {{ Str::limit($product->description, 80) }}
                            </p>

                            <p class="fw-bold">
                                ₦{{ number_format($product->price) }}
                            </p>

                            <form method="POST" action="{{ route('cart.add', $product->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
