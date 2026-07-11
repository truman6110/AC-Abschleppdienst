<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['category', 'images'])
            ->where('status', true);

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $products = $query
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $categories = Category::where('status', true)
            ->orderBy('name')
            ->get();

        return view('products.index', compact(
            'products',
            'categories'
        ));
    }

    public function show(Product $product)
    {
        $product->load(['category', 'images']);

        $relatedProducts = Product::with('images')
            ->where('status', true)
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('products.show', compact(
            'product',
            'relatedProducts'
        ));
    }
}