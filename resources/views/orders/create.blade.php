@extends('layouts.app')

@section('content')

<section class="py-20 bg-gray-100">

    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

            <div class="bg-gray-900 text-white p-10">

                <h1 class="text-4xl font-bold">

                    Bestellung

                </h1>

                <p class="mt-3 text-gray-300">

                    Bitte füllen Sie das Formular aus.

                </p>

            </div>

            <div class="p-10">

                @if ($errors->any())

                    <div class="mb-8 bg-red-100 border border-red-300 text-red-700 rounded-xl p-6">

                        <ul class="list-disc list-inside">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="{{ route('orders.store',$product) }}" method="POST">

                    @csrf

                    <div class="grid md:grid-cols-2 gap-8">

                        <div>

                            <label class="font-semibold">

                                Vorname

                            </label>

                            <input
                                type="text"
                                name="first_name"
                                value="{{ old('first_name') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div>

                            <label class="font-semibold">

                                Nachname

                            </label>

                            <input
                                type="text"
                                name="last_name"
                                value="{{ old('last_name') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div>

                            <label class="font-semibold">

                                E-Mail

                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div>

                            <label class="font-semibold">

                                Telefon

                            </label>

                            <input
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div class="md:col-span-2">

                            <label class="font-semibold">

                                Straße

                            </label>

                            <input
                                type="text"
                                name="street"
                                value="{{ old('street') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div>

                            <label class="font-semibold">

                                Postleitzahl

                            </label>

                            <input
                                type="text"
                                name="postal_code"
                                value="{{ old('postal_code') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div>

                            <label class="font-semibold">

                                Stadt

                            </label>

                            <input
                                type="text"
                                name="city"
                                value="{{ old('city') }}"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div>

                            <label class="font-semibold">

                                Land

                            </label>

                            <select
                                name="country"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                                <option value="">Land auswählen</option>

                                <option>Deutschland</option>
                                <option>Belgien</option>
                                <option>Frankreich</option>
                                <option>Luxemburg</option>
                                <option>Niederlande</option>
                                <option>Österreich</option>
                                <option>Schweiz</option>

                            </select>

                        </div>

                        <div>

                            <label class="font-semibold">

                                Menge

                            </label>

                            <input
                                type="number"
                                name="quantity"
                                min="1"
                                max="{{ $product->stock }}"
                                value="1"
                                required
                                class="w-full border rounded-xl mt-2 p-4">

                        </div>

                        <div class="md:col-span-2">

                            <label class="font-semibold">

                                Produkt

                            </label>

                            <input
                                type="text"
                                value="{{ $product->name }}"
                                disabled
                                class="w-full bg-gray-100 border rounded-xl mt-2 p-4">

                        </div>

                        <div class="md:col-span-2">

                            <label class="font-semibold">

                                Nachricht

                            </label>

                            <textarea
                                name="message"
                                rows="5"
                                class="w-full border rounded-xl mt-2 p-4">{{ old('message') }}</textarea>

                        </div>

                    </div>

                    <div class="mt-10">

                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 px-10 py-4 rounded-xl font-bold">

                            Bestellung absenden

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection