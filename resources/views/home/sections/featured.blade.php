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

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">

            @forelse($featuredProducts as $product)

                @php
                    $image = $product->images->where('is_cover', true)->first()
                             ?? $product->images->first();
                @endphp

                <div class="group rounded-2xl overflow-hidden bg-white shadow hover:shadow-2xl transition duration-500">

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

                        <span class="absolute top-5 left-5 bg-yellow-400 text-black px-4 py-2 rounded-full font-bold">

                            Bestseller

                        </span>

                    </div>

                    <div class="p-8">

                        <h3 class="text-2xl font-bold">

                            {{ $product->name }}

                        </h3>

                        <p class="mt-4 text-gray-600">

                            {{ $product->short_description }}

                        </p>

                        <div class="mt-6 flex justify-between items-center">

                            <span class="text-3xl font-bold text-yellow-500">

                                € {{ number_format($product->price,2,',','.') }}

                            </span>

                           <a href="{{ route('product.show', $product) }}"
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

    </div>

</section>