@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-4xl font-bold">
            Produkte
        </h1>

        <p class="text-gray-500 mt-2">
            Verwalten Sie alle Produkte.
        </p>

    </div>

    <a href="{{ route('products.create') }}"
       class="bg-yellow-400 hover:bg-yellow-500 px-6 py-3 rounded-xl font-bold">

        + Neues Produkt

    </a>

</div>

@if(session('success'))

<div class="mb-6 bg-green-100 text-green-700 px-5 py-4 rounded-xl">

    {{ session('success') }}

</div>

@endif

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-5">Bild</th>

                <th class="text-left p-5">Produkt</th>

                <th class="text-left p-5">Preis</th>

                <th class="text-left p-5">Bestand</th>

                <th class="text-left p-5">Status</th>

                <th class="text-center p-5">Aktionen</th>

            </tr>

        </thead>

        <tbody>

        @forelse($products as $product)

            <tr class="border-t">

                <td class="p-5">

                    @php
                        $cover = $product->images->where('is_cover', true)->first()
                                 ?? $product->images->first();
                    @endphp

                    @if($cover)

                        <img
                            src="{{ asset('storage/'.$cover->image) }}"
                            alt="{{ $product->name }}"
                            class="w-20 h-20 rounded-lg object-cover border">

                    @else

                        <div class="w-20 h-20 rounded-lg bg-gray-200 flex items-center justify-center text-gray-500">

                            Kein Bild

                        </div>

                    @endif

                </td>

                <td class="p-5 font-semibold">

                    {{ $product->name }}

                </td>

                <td class="p-5">

                    € {{ number_format($product->price,2,',','.') }}

                </td>

                <td class="p-5">

                    {{ $product->stock }}

                </td>

                <td class="p-5">

                    @if($product->status)

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">

                            Aktiv

                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">

                            Inaktiv

                        </span>

                    @endif

                </td>

                <td class="p-5">

                    <div class="flex justify-center items-center gap-4">

                        <a href="{{ route('products.edit', $product) }}"
                           class="text-blue-600 hover:text-blue-800 font-semibold">

                            Bearbeiten

                        </a>

                        <form action="{{ route('products.destroy', $product) }}"
                              method="POST"
                              onsubmit="return confirm('Möchten Sie dieses Produkt wirklich löschen?');">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="text-red-600 hover:text-red-800 font-semibold">

                                Löschen

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6"
                    class="text-center py-16 text-gray-500">

                    Noch kein Produkt vorhanden.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@if($products->count())

<div class="mt-8">

    {{ $products->links() }}

</div>

@endif

@endsection