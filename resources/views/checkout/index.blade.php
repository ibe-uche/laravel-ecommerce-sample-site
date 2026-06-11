@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <h2 class="mb-4">Checkout</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('checkout.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', Auth::user()->name ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ old('email', Auth::user()->email ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Delivery Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Place Order</button>
            </form>
        </div>

        <div class="col-md-5">
            <h4 class="mb-3">Order Summary</h4>
            <ul class="list-group mb-3">
                @php $total = 0; @endphp
                @foreach ($cart as $id => $item)
                    @php $total += $item['price'] * $item['quantity']; @endphp
                    <li class="list-group-item d-flex justify-content-between">
                        <span>{{ $item['name'] }} x{{ $item['quantity'] }}</span>
                        <span>₦{{ number_format($item['price'] * $item['quantity']) }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span>₦{{ number_format($total) }}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
