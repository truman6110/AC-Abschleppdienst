<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Storage;
use App\Models\BankSetting;
use App\Mail\PaymentProofMail;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function show(Product $product)
    {
        return view('checkout', compact('product'));
    }

  public function store(Request $request, Product $product)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|email',
        'phone'      => 'required|string|max:30',
        'street'     => 'required|string|max:255',
        'zip'        => 'required|string|max:20',
        'city'       => 'required|string|max:255',
        'country'    => 'required|string|max:255',
        'comment'    => 'nullable|string',
    ]);

    $order = Order::create([
        ...$validated,

        'order_number' => 'AC-' . now()->format('YmdHis'),

        'total' => $product->price,

        'status' => 'pending',
    ]);

    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => $product->id,
        'quantity' => 1,
        'price' => $product->price,
    ]);

    return redirect()->route('payment.show', $order);
}
public function payment(Order $order)
{
    $bank = BankSetting::first();

    return view('payment', compact('order', 'bank'));
}


public function uploadProof(Request $request, Order $order)
{
    $request->validate([
        'payment_proof'=>'required|file|mimes:jpg,jpeg,png,pdf|max:10240',
    ]);

    $path = $request
        ->file('payment_proof')
        ->store('payments','public');

    $order->update([
        'payment_proof'=>$path,
        'payment_sent_at'=>now(),
        'status'=>'payment_uploaded',
    ]);
    
    Mail::to('ton-email@example.com')
    ->send(new PaymentProofMail($order->load('items.product')));

    return back()->with(
        'success',
        'Zahlungsnachweis erfolgreich hochgeladen.'
    );
}
}