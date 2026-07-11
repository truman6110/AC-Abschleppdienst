<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function create(Product $product)
    {
        return view('orders.create', compact('product'));
    }

    public function store(Request $request, Product $product)
    {
        $validated = $request->validate([

            'first_name'   => 'required|string|min:2|max:100',
            'last_name'    => 'required|string|min:2|max:100',
            'email'        => 'required|email|max:255',

            'phone'        => [
                'required',
                'regex:/^\+?[0-9\s\-\(\)]{8,20}$/'
            ],

            'street'       => 'required|string|max:255',

            'postal_code'  => [
                'required',
                'regex:/^[0-9]{5}$/'
            ],

            'city'         => [
                'required',
                'regex:/^[A-Za-zÀ-ÿÄÖÜäöüß\s\-]+$/u'
            ],

            'country'      => 'required|string|max:100',

            'quantity'     => 'required|integer|min:1|max:' . $product->stock,

            'message'      => 'nullable|string|max:1000',

        ]);

        $validated['product_id'] = $product->id;

        $validated['order_number'] =
            'ORD-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6));

        Order::create($validated);

        return redirect()
    ->route('orders.success')
    ->with([
        'order_number' => $validated['order_number'],
        'success' => 'Ihre Bestellung wurde erfolgreich gesendet.'
    ]);
    }
}