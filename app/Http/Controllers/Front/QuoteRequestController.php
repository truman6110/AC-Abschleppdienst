<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function create()
    {
        $products = Product::orderBy('name')->get();

        return view('contact.index', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'product_id' => ['nullable','exists:products,id'],

            'firstname' => ['required','max:255'],

            'lastname' => ['required','max:255'],

            'email' => ['required','email'],

            'phone' => ['nullable','max:255'],

            'company' => ['nullable','max:255'],

            'message' => ['required']

        ]);

        QuoteRequest::create($data);

        return redirect()
            ->route('contact')
            ->with('success','Vielen Dank! Ihre Anfrage wurde erfolgreich gesendet.');
    }
}