@extends('layouts.app')

@section('title', 'Order Confirmed')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <div class="mb-4">
                <h2 class="mb-2">Order Confirmed!</h2>
                <p class="text-muted">Thank you, {{ $order->name }}. Your order has been placed successfully.</p>
            </div>

            <div class="card mb-4">
                <div class="card-body text-start">
                    <h5 class="card-title">Order Details</h5>
                    <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Delivery Address:</strong> {{ $order->address }}</p>
                    <p><strong>Status:</strong> <span class="badge bg-warning text-dark">{{ ucfirst($order->status) }}</span>
                    </p>

                    <h6 class="mt-3">Items Ordered</h6>
                    <ul class="list-group mb-3">
                        @foreach ($order->items as $item)
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ $item->name }} x{{ $item->quantity }}</span>
                                <span>₦{{ number_format($item->price * $item->quantity) }}</span>
                            </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between fw-bold">
                            <span>Total</span>
                            <span>₦{{ number_format($order->total) }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="{{ url('/products') }}" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>
@endsection
