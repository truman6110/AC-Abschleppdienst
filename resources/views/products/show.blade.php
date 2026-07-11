@extends('layouts.app')

@section('content')

<section class="py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Images -->

            <!-- Images -->

<div>

    @php
        $cover = $product->images->where('is_cover', true)->first() ?? $product->images->first();
    @endphp

    @if($cover)

        <img
            id="main-image"
            src="{{ asset('storage/'.$cover->image) }}"
            class="w-full rounded-3xl shadow-xl object-cover h-[550px]"
            alt="{{ $product->name }}">

    @else

        <div class="w-full h-[550px] rounded-3xl bg-gray-200 flex items-center justify-center">

            Kein Bild

        </div>

    @endif

    <div class="grid grid-cols-4 gap-4 mt-6">

        @foreach($product->images as $image)

            <img
                src="{{ asset('storage/'.$image->image) }}"
                class="rounded-xl cursor-pointer hover:opacity-80 transition h-24 object-cover thumbnail"
                onclick="document.getElementById('main-image').src=this.src">

        @endforeach

    </div>

</div>

            <!-- Informations -->

            <div>

                <span class="uppercase tracking-[4px] text-yellow-500 font-semibold">
                   {{ $product->category->name }}
                </span>

                <h1 class="mt-4 text-5xl font-extrabold text-gray-900">
                    {{ $product->name }}
                </h1>

                <p class="mt-6 text-4xl font-bold text-yellow-500">

                    € {{ number_format($product->price,2,',','.') }}

                </p>

                <p class="mt-8 text-lg text-gray-600 leading-8">

                   {{ $product->short_description }}
                </p>

                <div class="mt-10 space-y-4">

    <div class="flex justify-between border-b pb-3">

        <span>Marke</span>

        <strong>{{ $product->brand ?: '-' }}</strong>

    </div>

    <div class="flex justify-between border-b pb-3">

        <span>Artikelnummer (SKU)</span>

        <strong>{{ $product->sku }}</strong>

    </div>

    <div class="flex justify-between border-b pb-3">

        <span>Lagerbestand</span>

        <strong>{{ $product->stock }}</strong>

    </div>

    <div class="flex justify-between border-b pb-3">

        <span>Gewicht</span>

        <strong>{{ $product->weight ? $product->weight.' kg' : '-' }}</strong>

    </div>

    <div class="flex justify-between border-b pb-3">

        <span>Länge</span>

        <strong>{{ $product->length ? $product->length.' cm' : '-' }}</strong>

    </div>

    <div class="flex justify-between border-b pb-3">

        <span>Breite</span>

        <strong>{{ $product->width ? $product->width.' cm' : '-' }}</strong>

    </div>

    <div class="flex justify-between border-b pb-3">

        <span>Höhe</span>

        <strong>{{ $product->height ? $product->height.' cm' : '-' }}</strong>

    </div>

</div>

                <div class="flex flex-wrap gap-5 mt-12">

                    <a href="{{ route('admin.orders.create',$product) }}"
                       class="bg-yellow-400 hover:bg-yellow-500 transition px-8 py-4 rounded-xl font-bold">

                        Jetzt bestellen

                    </a>

                   <a href="{{ route('contact') }}"
                      class="border-2 border-black px-8 py-4 rounded-xl hover:bg-black hover:text-white transition">

                      Kontakt

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl font-bold mb-12">

            Produktbeschreibung

        </h2>

        <div class="grid lg:grid-cols-2 gap-16">

            <div>

               <p class="leading-9 text-gray-600">

    {{ $product->description }}

</p>

            </div>

            <div>

                <ul class="space-y-5 text-lg">

                    <li>✔ Verzinkter Stahlrahmen</li>

                    <li>✔ Hohe Tragfähigkeit</li>

                    <li>✔ LED-Beleuchtung</li>

                    <li>✔ Robuster Boden</li>

                    <li>✔ Lange Lebensdauer</li>

                </ul>

            </div>

        </div>

    </div>

</section>
<section class="py-24 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl font-bold mb-12">

            Ähnliche Produkte

        </h2>

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

            @forelse($relatedProducts as $related)

                @php
                    $image = $related->images->where('is_cover', true)->first()
                             ?? $related->images->first();
                @endphp

                <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-xl transition">

                    @if($image)

                        <img
                            src="{{ asset('storage/'.$image->image) }}"
                            class="w-full h-56 object-cover"
                            alt="{{ $related->name }}">

                    @else

                        <div class="w-full h-56 bg-gray-200 flex items-center justify-center">

                            Kein Bild

                        </div>

                    @endif

                    <div class="p-6">

                        <h3 class="text-xl font-bold">

                            {{ $related->name }}

                        </h3>

                        <p class="text-gray-500 mt-2">

                            {{ $related->category->name }}

                        </p>

                        <div class="flex justify-between items-center mt-6">

                            <span class="text-2xl font-bold text-yellow-500">

                                € {{ number_format($related->price,2,',','.') }}

                            </span>

                            <a href="{{ route('product.show',$related) }}"
                               class="bg-black text-white px-4 py-2 rounded-lg hover:bg-yellow-500 hover:text-black transition">

                                Details

                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-span-4 text-center py-10 text-gray-500">

                    Keine ähnlichen Produkte vorhanden.

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