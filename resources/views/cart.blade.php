<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <section class="py-5">
        <div class="container">
            <h1 class="text-3xl font-bold mb-4">Your Cart</h1>

            @if(session('success'))
                <div class="alert alert-success mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if(count($cart) > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $id => $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                                </td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ number_format($item['price'], 2) }} MAD</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ number_format($item['price'] * $item['quantity'], 2) }} MAD</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
                </div>
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>
    </section>

@endsection

