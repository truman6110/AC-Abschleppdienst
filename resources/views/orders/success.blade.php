@extends('layouts.app')

@section('content')

<section class="py-24 bg-gray-100">

    <div class="max-w-3xl mx-auto px-6">

        <div class="bg-white rounded-3xl shadow-xl p-12 text-center">

            <div class="text-6xl mb-6">
                ✅
            </div>

            <h1 class="text-4xl font-bold text-green-600">

                Bestellung erfolgreich!

            </h1>

            <p class="mt-6 text-gray-600 text-lg">

                Vielen Dank für Ihre Bestellung.

            </p>

            <div class="mt-10 bg-gray-100 rounded-2xl p-6">

                <p class="text-gray-500">

                    Bestellnummer

                </p>

                <h2 class="text-3xl font-bold mt-2">

                    {{ session('order_number') }}

                </h2>

            </div>

            <p class="mt-8 text-gray-600">

                Wir werden Sie schnellstmöglich kontaktieren.

            </p>

            <div class="mt-12 flex justify-center gap-6">

                <a href="{{ route('home') }}"
                   class="bg-yellow-400 hover:bg-yellow-500 px-8 py-4 rounded-xl font-bold">

                    Zur Startseite

                </a>

                <a href="{{ route('products') }}"
                   class="bg-black text-white hover:bg-gray-800 px-8 py-4 rounded-xl">

                    Weitere Produkte

                </a>

            </div>

        </div>

    </div>

</section>

@endsection