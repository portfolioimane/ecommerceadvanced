<?php
namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $latestProducts = Product::latest()->take(6)->get(); // Fetch the latest 6 products
        return view('home', compact('latestProducts'));
    }
}
