@extends('layouts.main')

@section('title', $product->name)

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <h1 class="display-4">{{ $product->name }}</h1>
                <p class="lead">{{ $product->description }}</p>
                <h3 class="text-primary">{{ number_format($product->price, 2) }} MAD</h3>

                <!-- Form to add product to cart with quantity input -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>

                <!-- You can add more details or options here -->
            </div>
        </div>
    </div>
</section>
@endsection
