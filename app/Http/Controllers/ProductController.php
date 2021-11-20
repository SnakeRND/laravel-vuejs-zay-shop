<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts() {
        $products = Product::all();

        return ['result' => $products];
    }

    public function getFeaturedProducts() {
        $featured_products = Product::all()->where('featured', true);

        return ['result' => $featured_products];
    }
}
