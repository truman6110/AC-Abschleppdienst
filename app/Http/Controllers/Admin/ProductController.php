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
    public function index()
    {
        $products = Product::with(['category', 'images'])
            ->latest()
            ->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status', true)
            ->orderBy('name')
            ->get();

        return view('admin.products.create', compact('categories'));
    }

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

        $validated['slug'] = Str::slug($validated['name']);

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

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::where('status', true)
            ->orderBy('name')
            ->get();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([

            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:products,sku,' . $product->id,
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

        ]);

        $validated['slug'] = Str::slug($validated['name']);

        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produkt erfolgreich aktualisiert.');
    }

    public function destroy(Product $product)
    {
        if ($product->images()->count()) {

            foreach ($product->images as $image) {

                Storage::disk('public')->delete($image->image);

                $image->delete();
            }
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produkt erfolgreich gelöscht.');
    }
}