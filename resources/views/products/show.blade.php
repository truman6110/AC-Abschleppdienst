@extends('layouts.app')

@section('content')

<section class="bg-[#f8fafc] py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-20 items-start">

            {{-- Galerie --}}

            <div class="lg:sticky lg:top-28">

                @php
                    $cover = $product->images->where('is_cover', true)->first()
                             ?? $product->images->first();
                @endphp

                @if($cover)

                    <div class="bg-white rounded-[28px] overflow-hidden shadow-xl">

                        <img
                            id="main-image"
                            src="{{ asset('storage/'.$cover->image) }}"
                            class="w-full h-[560px] object-cover"
                            alt="{{ $product->name }}">

                    </div>

                @else

                    <div class="bg-gray-200 rounded-[28px] h-[560px] flex items-center justify-center">

                        Kein Bild

                    </div>

                @endif

                <div class="grid grid-cols-4 gap-4 mt-5">

                    @foreach($product->images as $image)

                        <img
                            src="{{ asset('storage/'.$image->image) }}"
                            onclick="document.getElementById('main-image').src=this.src"
                         class="thumbnail cursor-pointer rounded-2xl h-24 object-cover border-2 border-transparent hover:border-yellow-400 transition duration-300"   class="cursor-pointer rounded-2xl h-24 object-cover border-2 border-transparent hover:border-yellow-400 transition duration-300">

                    @endforeach

                </div>

            </div>

            {{-- Informations --}}

            <div>

                <span class="uppercase tracking-[4px] text-yellow-500 font-bold">

                    {{ $product->category->name }}

                </span>

                <h1 class="mt-4 text-5xl xl:text-6xl font-black text-gray-900 leading-tight">

                    {{ $product->name }}

                </h1>

                <div class="flex items-center gap-3 mt-6">

                    <span class="text-yellow-400 text-xl">

                        ★★★★★

                    </span>

                    <span class="text-gray-500">

                        Premium Qualität

                    </span>

                </div>

                <div class="mt-8">

                    <span class="text-5xl font-black text-yellow-500">

                        € {{ number_format($product->price,2,',','.') }}

                    </span>

                    <span class="ml-2 text-gray-500">

                        inkl. MwSt.

                    </span>

                </div>

                <p class="mt-8 text-lg leading-9 text-gray-600">

                    {{ $product->short_description }}

                </p>

                <div class="grid grid-cols-2 gap-5 mt-10">

                    <div class="bg-white rounded-2xl p-5 shadow">

                        <span class="text-gray-500 text-sm">

                            Marke

                        </span>

                        <h3 class="font-bold text-xl mt-2">

                            {{ $product->brand ?: 'Premium' }}

                        </h3>

                    </div>

                    <div class="bg-white rounded-2xl p-5 shadow">

                        <span class="text-gray-500 text-sm">

                            SKU

                        </span>

                        <h3 class="font-bold text-xl mt-2">

                            {{ $product->sku }}

                        </h3>

                    </div>

                    <div class="bg-white rounded-2xl p-5 shadow">

                        <span class="text-gray-500 text-sm">

                            Lager

                        </span>

                        <h3 class="font-bold text-xl mt-2">

                            {{ $product->stock }}

                        </h3>

                    </div>

                    <div class="bg-white rounded-2xl p-5 shadow">

                        <span class="text-gray-500 text-sm">

                            Gewicht

                        </span>

                        <h3 class="font-bold text-xl mt-2">

                            {{ $product->weight ? $product->weight.' kg' : '-' }}

                        </h3>

                    </div>

                    <div class="bg-white rounded-2xl p-5 shadow">

                        <span class="text-gray-500 text-sm">

                            Länge

                        </span>

                        <h3 class="font-bold text-xl mt-2">

                            {{ $product->length ? $product->length.' cm' : '-' }}

                        </h3>

                    </div>

                    <div class="bg-white rounded-2xl p-5 shadow">

                        <span class="text-gray-500 text-sm">

                            Breite

                        </span>

                        <h3 class="font-bold text-xl mt-2">

                            {{ $product->width ? $product->width.' cm' : '-' }}

                        </h3>

                    </div>

                </div>

                <div class="grid grid-cols-4 gap-4 mt-8">

                    <div class="bg-white rounded-2xl shadow p-5 text-center">

                        🚚

                        <p class="mt-3 text-sm font-semibold">

                            Lieferung

                        </p>

                    </div>

                    <div class="bg-white rounded-2xl shadow p-5 text-center">

                        🛡️

                        <p class="mt-3 text-sm font-semibold">

                            Garantie

                        </p>

                    </div>

                    <div class="bg-white rounded-2xl shadow p-5 text-center">

                        💳

                        <p class="mt-3 text-sm font-semibold">

                            Sicher

                        </p>

                    </div>

                    <div class="bg-white rounded-2xl shadow p-5 text-center">

                        ☎️

                        <p class="mt-3 text-sm font-semibold">

                            Support

                        </p>

                    </div>

                </div>

                <div class="flex gap-5 mt-10">

                    <a href="{{ route('contact') }}"
                       class="flex-1 bg-yellow-400 hover:bg-yellow-500 text-center py-4 rounded-2xl font-bold transition">

                       Jetzt Angebot anfordern
                    </a>

                    <a href="{{ route('products') }}"
                       class="flex-1 border-2 border-gray-900 hover:bg-gray-900 hover:text-white text-center py-4 rounded-2xl font-bold transition">

                        Zurück

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="uppercase tracking-[4px] text-yellow-500 font-bold">

                Details

            </span>

            <h2 class="text-5xl font-black mt-4">

                Produktbeschreibung

            </h2>

            <p class="mt-5 max-w-3xl mx-auto text-gray-600 text-lg leading-8">

                Entdecken Sie alle technischen Informationen und die Vorteile dieses hochwertigen Anhängers.

            </p>

        </div>

        <div class="grid lg:grid-cols-2 gap-20">

            <div>

                <div class="bg-gray-50 rounded-3xl p-10 shadow-sm">

                    <h3 class="text-3xl font-bold mb-8">

                        Beschreibung

                    </h3>

                    <div class="leading-9 text-gray-600 text-lg">

                        {{ $product->description }}

                    </div>

                </div>

            </div>

            <div class="space-y-6">

                <div class="bg-white rounded-3xl shadow p-7 flex gap-5">

                    <div class="text-4xl">

                        ✔

                    </div>

                    <div>

                        <h4 class="font-bold text-xl">

                            Verzinkter Stahlrahmen

                        </h4>

                        <p class="mt-2 text-gray-600">

                            Maximaler Schutz gegen Korrosion und lange Lebensdauer.

                        </p>

                    </div>

                </div>

                <div class="bg-white rounded-3xl shadow p-7 flex gap-5">

                    <div class="text-4xl">

                        ✔

                    </div>

                    <div>

                        <h4 class="font-bold text-xl">

                            Hohe Tragfähigkeit

                        </h4>

                        <p class="mt-2 text-gray-600">

                            Ideal für professionelle und private Anwendungen.

                        </p>

                    </div>

                </div>

                <div class="bg-white rounded-3xl shadow p-7 flex gap-5">

                    <div class="text-4xl">

                        ✔

                    </div>

                    <div>

                        <h4 class="font-bold text-xl">

                            LED-Beleuchtung

                        </h4>

                        <p class="mt-2 text-gray-600">

                            Moderne Beleuchtung mit geringem Energieverbrauch.

                        </p>

                    </div>

                </div>

                <div class="bg-white rounded-3xl shadow p-7 flex gap-5">

                    <div class="text-4xl">

                        ✔

                    </div>

                    <div>

                        <h4 class="font-bold text-xl">

                            Robuster Boden

                        </h4>

                        <p class="mt-2 text-gray-600">

                            Entwickelt für intensive Nutzung und hohe Belastungen.

                        </p>

                    </div>

                </div>

                <div class="bg-yellow-400 rounded-3xl p-8 mt-10">

                    <h3 class="text-2xl font-black">

                        Warum AC-Abschleppdienst?

                    </h3>

                    <ul class="mt-6 space-y-3 font-medium">

                        <li>✓ Premium Qualität</li>

                        <li>✓ Persönliche Beratung</li>

                        <li>✓ Schnelle Lieferung</li>

                        <li>✓ Faire Preise</li>

                        <li>✓ Professioneller Kundenservice</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-[#f8fafc]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-end mb-14">

            <div>

                <span class="uppercase tracking-[4px] text-yellow-500 font-bold">

                    Empfehlungen

                </span>

                <h2 class="text-5xl font-black mt-3">

                    Ähnliche Produkte

                </h2>

                <p class="text-gray-600 mt-4">

                    Weitere Premium-Anhänger, die Sie interessieren könnten.

                </p>

            </div>

            <a href="{{ route('products') }}"
               class="hidden lg:inline-flex px-7 py-3 rounded-full border-2 border-black hover:bg-black hover:text-white transition">

                Alle Produkte

            </a>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

            @forelse($relatedProducts as $related)

                @php
                    $image = $related->images->where('is_cover', true)->first()
                             ?? $related->images->first();
                @endphp

                <div class="bg-white rounded-[24px] overflow-hidden shadow-lg hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                    <a href="{{ route('product.show',$related) }}">

                        @if($image)

                            <img
                                src="{{ asset('storage/'.$image->image) }}"
                                class="w-full h-64 object-cover"
                                alt="{{ $related->name }}">

                        @else

                            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">

                                Kein Bild

                            </div>

                        @endif

                    </a>

                    <div class="p-7">

                        <span class="text-sm uppercase tracking-[2px] text-yellow-500 font-bold">

                            {{ $related->category->name }}

                        </span>

                        <h3 class="mt-3 text-2xl font-bold leading-tight">

                            {{ $related->name }}

                        </h3>

                        <p class="mt-4 text-gray-600 line-clamp-3">

                            {{ $related->short_description }}

                        </p>

                        <div class="flex items-center justify-between mt-8">

                            <span class="text-3xl font-black text-yellow-500">

                                € {{ number_format($related->price,2,',','.') }}

                            </span>

                            <a href="{{ route('product.show',$related) }}"
                               class="bg-black hover:bg-yellow-400 hover:text-black text-white px-5 py-3 rounded-xl transition font-bold">

                                Details

                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-span-4">

                    <div class="bg-white rounded-3xl p-16 text-center shadow">

                        <h3 class="text-3xl font-bold">

                            Keine ähnlichen Produkte vorhanden

                        </h3>

                        <p class="mt-4 text-gray-600">

                            Weitere Anhänger werden in Kürze verfügbar sein.

                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>

@if(session('success'))

<div class="max-w-7xl mx-auto px-6 mt-8">

    <div class="bg-green-100 border border-green-300 text-green-700 rounded-2xl p-6">

        {{ session('success') }}

    </div>

</div>

@endif

@endsection