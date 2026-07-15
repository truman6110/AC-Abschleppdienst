@extends('layouts.app')

@section('title','Kontakt | AC-Abschleppdienst')

@section('description','Kontaktieren Sie AC-Abschleppdienst für Fragen, Beratung oder ein individuelles Angebot.')

@section('content')

<!-- Hero -->

<section class="bg-gray-900 text-white py-24">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[4px] text-yellow-400 font-bold">
    Kontakt
</span>

<h1 class="mt-6 text-6xl font-black leading-tight">

    Wir beraten Sie persönlich

</h1>

<p class="mt-8 max-w-3xl mx-auto text-xl text-gray-300 leading-9">

    Haben Sie Fragen zu unseren Anhängern oder wünschen Sie ein individuelles Angebot?
    Unser Team beantwortet Ihre Anfrage schnell und kompetent.

</p>

    </div>

</section>

<!-- Contact -->

<section class="py-24 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16">

        <!-- Formulaire -->

        <div class="bg-white rounded-3xl shadow-xl p-10">

            <h2 class="text-3xl font-bold mb-8">
                Nachricht senden
            </h2>

            <div class="flex items-center gap-3 mb-8">

    <span class="text-yellow-500 text-2xl">

        ★★★★★

    </span>

    <span class="text-gray-500">

        Antwort innerhalb von 24 Stunden

    </span>

</div>

           <form method="POST" action="{{ route('contact.store') }}">

    @csrf
    @if(session('success'))

<div class="mb-6 rounded-2xl bg-green-100 border border-green-300 text-green-700 p-4">

    {{ session('success') }}

</div>

@endif

@if($errors->any())

<div class="mb-6 rounded-2xl bg-red-100 border border-red-300 text-red-700 p-4">

    <ul class="list-disc ml-5">

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

                <div class="grid md:grid-cols-2 gap-6">

                    <input
                     type="text"
                        name="firstname"
                      value="{{ old('firstname') }}"
                        placeholder="Vorname"
            class="border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                   <input
    type="text"
    name="lastname"
    value="{{ old('lastname') }}"
    placeholder="Nachname"
    class="border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <input
    type="email"
    name="email"
    value="{{ old('email') }}"
    placeholder="E-Mail"
    class="w-full border rounded-xl p-4 mt-6 focus:outline-none focus:ring-2 focus:ring-yellow-400">

              <input
    type="tel"
    name="phone"
    value="{{ old('phone') }}"
    placeholder="Telefon"
    class="w-full border rounded-xl p-4 mt-6 focus:outline-none focus:ring-2 focus:ring-yellow-400">
    <input
    type="text"
    name="company"
    value="{{ old('company') }}"
    placeholder="Unternehmen (optional)"
    class="w-full border rounded-xl p-4 mt-6 focus:outline-none focus:ring-2 focus:ring-yellow-400">   
    
    <select
    name="product_id"
    class="w-full border rounded-xl p-4 mt-6 focus:outline-none focus:ring-2 focus:ring-yellow-400">

    <option value="">

        Produkt auswählen

    </option>

    @foreach($products as $product)

        <option
            value="{{ $product->id }}"
            @selected(old('product_id') == $product->id)>

            {{ $product->name }}

        </option>

    @endforeach

</select>        
    
       <textarea
    rows="6"
    name="message"
    placeholder="Ihre Nachricht..."
    class="w-full border rounded-xl p-4 mt-6 resize-none focus:outline-none focus:ring-2 focus:ring-yellow-400">{{ old('message') }}</textarea>
               <button
    class="w-full mt-8 bg-yellow-400 hover:bg-yellow-500 transition rounded-2xl py-5 text-lg font-bold shadow-lg">

    Kostenloses Angebot anfordern

</button>

            </form>

        </div>

        <!-- Informations -->

        <div>

            <h2 class="text-3xl font-bold">
                Kontaktinformationen
            </h2>

            <div class="space-y-8 mt-10">

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        Adresse
                    </h3>

                    <p class="text-gray-600">
                        Deutschland
                    </p>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        Telefon
                    </h3>

                    <p class="text-gray-600">
                        +49 123 456 789
                    </p>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        E-Mail
                    </h3>

                    <p class="text-gray-600">
                        info@ac-abschleppdienst.de
                    </p>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        Öffnungszeiten
                    </h3>

                    <p class="text-gray-600">
                        Montag - Freitag : 08:00 - 18:00
                    </p>

                    <p class="text-gray-600">
                        Samstag : 09:00 - 14:00
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Carte -->

<section>

    <iframe
        src="https://www.google.com/maps?q=Berlin&output=embed"
        class="w-full h-[500px] border-0"
        loading="lazy">
    </iframe>

</section>

@endsection