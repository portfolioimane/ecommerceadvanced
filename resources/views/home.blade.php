<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to Our E-Commerce Site</h1>
        <p class="lead">Find the best products just for you</p>
        <a href="{{ url('/shop') }}" class="btn btn-light btn-lg">Shop Now</a>
    </div>
</section>

<!-- Latest Products Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Latest Products</h2>
        <div class="row">
            @foreach($latestProducts as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ url('/product/' . $product->id) }}" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
