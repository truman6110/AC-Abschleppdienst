<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex flex-col md:flex-row md:justify-between md:items-end mb-16">

            <div>

                <span class="uppercase tracking-[4px] text-yellow-500 font-semibold">
                    Bestseller
                </span>

                <h2 class="mt-4 text-4xl md:text-5xl font-bold text-gray-900">
                    Beliebte Anhänger
                </h2>

                <p class="mt-5 text-lg text-gray-600 max-w-2xl">
                    Unsere meistverkauften Modelle für Privatpersonen und Unternehmen.
                </p>

            </div>

            <a href="{{ route('products') }}"
               class="mt-8 md:mt-0 text-yellow-500 font-semibold hover:underline">

                Alle Produkte ansehen →

            </a>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            @forelse($featuredProducts as $product)

                @php
                    $image = $product->images->where('is_cover', true)->first()
                             ?? $product->images->first();
                @endphp

         <div class="group bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">

    <div class="relative overflow-hidden">

        @if($image)

            <img
                src="{{ asset('storage/'.$image->image) }}"
                class="w-full h-72 object-cover group-hover:scale-110 transition duration-700"
                alt="{{ $product->name }}">

        @else

            <div class="w-full h-72 bg-gray-200 flex items-center justify-center">

                Kein Bild

            </div>

        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-black/35 to-transparent"></div>

        <span class="absolute top-5 left-5 bg-yellow-400 text-black px-5 py-2 rounded-full text-sm font-bold shadow">

            Bestseller

        </span>

    </div>

    <div class="p-8">

        <div class="flex items-center gap-2 text-yellow-400">

            ★★★★★

            <span class="text-gray-500 text-sm">

                Premium

            </span>

        </div>

        <h3 class="mt-4 text-2xl font-black text-gray-900 leading-tight">

            {{ $product->name }}

        </h3>

        <p class="mt-4 text-gray-600 leading-7 line-clamp-3">

            {{ $product->short_description }}

        </p>

        <div class="mt-8 flex justify-between items-center">

            <div>

                <span class="block text-sm text-gray-500">

                    Preis

                </span>

                <span class="text-3xl font-black text-yellow-500">

                    € {{ number_format($product->price,2,',','.') }}

                </span>

            </div>

            <a href="{{ route('product.show',$product) }}"
               class="bg-black hover:bg-yellow-400 hover:text-black text-white px-6 py-3 rounded-xl font-bold transition">

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

    </div>

</section>