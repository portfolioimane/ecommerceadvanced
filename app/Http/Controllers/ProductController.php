<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the details of a specific product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Retrieve the product by its ID
        $product = Product::findOrFail($id);

        // Return the view with the product data
        return view('product.details', compact('product'));
    }
}
