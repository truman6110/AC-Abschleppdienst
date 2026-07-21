<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
   public function store(Request $request)
{
    $validated = $request->validate([

        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'sku' => 'required|string|max:255|unique:products',
        'brand' => 'nullable|string|max:255',
        'price' => 'required|numeric|min:0',
        'sale_price' => 'nullable|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'weight' => 'nullable|numeric|min:0',
        'length' => 'nullable|numeric|min:0',
        'width'  => 'nullable|numeric|min:0',
        'height' => 'nullable|numeric|min:0',
        'short_description' => 'nullable|string',
        'description' => 'nullable|string',

        'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

    ]);

    // Génération automatique d'un slug unique
    $slug = Str::slug($validated['name']);
    $originalSlug = $slug;
    $i = 1;

    while (Product::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $i;
        $i++;
    }

    $validated['slug'] = $slug;

    $product = Product::create($validated);

    if ($request->hasFile('images')) {

        foreach ($request->file('images') as $index => $image) {

            $path = $image->store('products', 'public');

            ProductImage::create([

                'product_id' => $product->id,
                'image' => $path,
                'sort_order' => $index,
                'is_cover' => $index === 0,

            ]);
        }
    }

    return redirect()
        ->route('admin.products.index')
        ->with('success', 'Produkt erfolgreich erstellt.');
}
}