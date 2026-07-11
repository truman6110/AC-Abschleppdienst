<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
            {
            $featuredProducts = Product::with('images')
            ->where('status', true)
            ->latest()
            ->take(6)
            ->get();

        $latestProducts = Product::with('images')
            ->where('status', true)
            ->latest()
            ->take(8)
            ->get();

        $categories = Category::where('status', true)
            ->orderBy('name')
            ->get();

        return view('home.index', compact(
            'featuredProducts',
            'latestProducts',
            'categories'
        ));
    }
}