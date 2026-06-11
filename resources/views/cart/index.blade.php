@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
    <h2 class="mb-4">Your Cart</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (empty($cart))
        <div class="alert alert-info">Your cart is empty. <a href="{{ url('/products') }}">Continue shopping</a></div>
    @else
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($cart as $id => $item)
                        @php $total += $item['price'] * $item['quantity']; @endphp
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>
                                <form method="POST" action="{{ route('cart.update', $id) }}">
                                    @csrf
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1"
                                            class="form-control" style="width: 75px;">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Update</button>
                                    </div>
                                </form>
                            </td>
                            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <form method="POST" action="{{ route('cart.remove', $id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Total:</th>
                        <th>${{ number_format($total, 2) }}</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <a href="{{ url('/products') }}" class="btn btn-outline-secondary">Continue Shopping</a>
            <a href="{{ url('/checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
        </div>
    @endif
@endsection
