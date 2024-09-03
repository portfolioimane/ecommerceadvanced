<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PayPalController;
use App\Models\Product;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'show']);


Route::get('/products', function() {
    $products = Product::all();
    return view('products', compact('products'));
});

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');


Route::post('/process-payment', [CheckoutController::class, 'processPayment'])->name('process.payment');

Route::get('/payment-return', [CheckoutController::class, 'handlePaymentReturn'])->name('payment.return');


Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/success/{orderId}', [CheckoutController::class, 'success'])->name('success');Route::get('/cancel', [CheckoutController::class, 'cancel'])->name('cancel');

Route::get('/paypalsuccess', [CheckoutController::class, 'paypalsuccess'])->name('paypalsuccess');


Route::post('/paypal/create', [CheckoutController::class, 'createPayment'])->name('paypal.create');


Auth::routes();

