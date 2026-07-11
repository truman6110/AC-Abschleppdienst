@extends('layouts.app')

@section('content')

<section class="bg-gray-900 text-white py-24">

    <div class="max-w-7xl mx-auto px-6">

        <span class="uppercase tracking-[4px] text-yellow-400 font-semibold">
            Unsere Produkte
        </span>

        <h1 class="mt-4 text-5xl md:text-6xl font-extrabold">
            Alle Anhänger
        </h1>

        <p class="mt-6 text-gray-300 text-xl max-w-3xl">
            Finden Sie hochwertige Anhänger für Privatpersonen und Unternehmen.
        </p>

    </div>

</section>

<section class="py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">

            <!-- Sidebar -->

            <aside class="bg-white rounded-2xl shadow p-8 h-fit">

                <h2 class="text-2xl font-bold mb-8">
                    Kategorien
                </h2>

                <div class="space-y-4">

                    <a href="{{ route('products') }}"
                       class="block font-semibold hover:text-yellow-500">

                        Alle Produkte

                    </a>

                    @foreach($categories as $category)

                        <a href="{{ route('products',['category'=>$category->id]) }}"
                           class="block hover:text-yellow-500">

                            {{ $category->name }}

                        </a>

                    @endforeach

                </div>

            </aside>

            <!-- Produits -->

            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

                    @forelse($products as $product)

                        @php
                            $image = $product->images->where('is_cover', true)->first()
                                     ?? $product->images->first();
                        @endphp

                        <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-2xl transition">

                            @if($image)

                                <img
                                    src="{{ asset('storage/'.$image->image) }}"
                                    class="w-full h-64 object-cover"
                                    alt="{{ $product->name }}">

                            @else

                                <div class="w-full h-64 bg-gray-200 flex items-center justify-center">

                                    Kein Bild

                                </div>

                            @endif

                            <div class="p-7">

                                <h3 class="text-2xl font-bold">

                                    {{ $product->name }}

                                </h3>

                                <p class="mt-3 text-gray-600">

                                    {{ $product->short_description }}

                                </p>

                                <div class="mt-6 flex justify-between items-center">

                                    <span class="text-3xl font-bold text-yellow-500">

                                        € {{ number_format($product->price,2,',','.') }}

                                    </span>

                                    <a href="{{ route('product.show',$product) }}"
                                       class="bg-black text-white px-5 py-3 rounded-lg hover:bg-yellow-500 hover:text-black transition">

                                        Details

                                    </a>

                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="col-span-3 text-center py-20 text-gray-500">

                            Keine Produkte vorhanden.

                        </div>

                    @endforelse

                </div>

                <div class="mt-10">

                    {{ $products->links() }}

                </div>

            </div>

        </div>

    </div>

</section>

@endsection