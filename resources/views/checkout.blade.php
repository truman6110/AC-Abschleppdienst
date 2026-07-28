@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<section class="bg-gray-100 py-16">
<div class="max-w-7xl mx-auto px-6">

<h1 class="text-4xl font-bold mb-10">
Checkout
</h1>

<div class="grid lg:grid-cols-3 gap-10">

<!-- Formulaire -->

<div class="lg:col-span-2 bg-white rounded-3xl shadow p-8">

<form method="POST" action="{{ route('checkout.store', $product) }}">

@csrf

<h2 class="text-2xl font-bold mb-6">
Persönliche Daten
</h2>

<div class="grid md:grid-cols-2 gap-5">

<div>
<label>Vorname *</label>
<input type="text" name="first_name"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('first_name') }}">
@error('first_name')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

<div>
<label>Nachname *</label>
<input type="text" name="last_name"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('last_name') }}">
@error('last_name')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

<div>
<label>E-Mail *</label>
<input type="email" name="email"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('email') }}">
@error('email')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

<div>
<label>Telefon *</label>
<input type="text" name="phone"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('phone') }}">
@error('phone')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

</div>

<h2 class="text-2xl font-bold mt-10 mb-6">
Lieferadresse
</h2>

<div class="grid md:grid-cols-2 gap-5">

<div>
<label>Straße *</label>
<input type="text" name="street"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('street') }}">
@error('street')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

<div>
<label>PLZ *</label>
<input type="text" name="zip"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('zip') }}">
@error('zip')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

<div>
<label>Stadt *</label>
<input type="text" name="city"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('city') }}">
@error('city')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

<div>
<label>Land *</label>
<input type="text" name="country"
class="w-full border rounded-xl p-3 mt-2"
value="{{ old('country', 'Deutschland') }}">
@error('country')
<p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
</div>

</div>

<div class="mt-8">

<label>Kommentar</label>

<textarea
name="comment"
rows="5"
class="w-full border rounded-xl p-3 mt-2">{{ old('comment') }}</textarea>

</div>

<button
class="mt-10 w-full bg-yellow-400 hover:bg-yellow-500 py-4 rounded-xl font-bold text-lg">

Bestellung absenden

</button>

</form>

</div>

<!-- Produit -->

<div>

<div class="bg-white rounded-3xl shadow p-8 sticky top-8">

<h2 class="text-2xl font-bold mb-5">
Ihre Bestellung
</h2>

@if($product->image)

<img
src="{{ asset('storage/'.$product->image) }}"
class="rounded-2xl mb-6">

@endif

<h3 class="text-xl font-bold">

{{ $product->name }}

</h3>

<p class="mt-4 text-3xl font-bold text-yellow-500">

€ {{ number_format($product->price,2,',','.') }}

</p>

<hr class="my-6">

<p>

✔ Sichere Bestellung

</p>

<p>

✔ Banküberweisung

</p>

<p>

✔ Schnelle Lieferung

</p>

</div>

</div>

</div>

</div>

</section>

@endsection