@extends('admin.layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex justify-between items-center mb-10">

        <div>

            <h1 class="text-4xl font-bold">
                Neues Produkt
            </h1>

            <p class="text-gray-500 mt-2">
                Neues Produkt hinzufügen
            </p>

        </div>

        <a href="{{ route('admin.products.index') }}"
           class="bg-gray-800 text-white px-6 py-3 rounded-xl hover:bg-black transition">

            Zurück

        </a>

    </div>

    @if ($errors->any())

        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-xl">

            <ul class="list-disc list-inside">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('admin.products.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white rounded-3xl shadow-xl p-10">

        @csrf

        <div class="grid md:grid-cols-2 gap-8">

            <div>

                <label class="font-semibold">
                    Produktname
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

            <div>

                <label class="font-semibold">
                    SKU
                </label>

                <input
                    type="text"
                    name="sku"
                    value="{{ old('sku') }}"
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

            <div>

                <label class="font-semibold">
                    Marke
                </label>

                <input
                    type="text"
                    name="brand"
                    value="{{ old('brand') }}"
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

            <div>

                <label class="font-semibold">
                    Kategorie
                </label>

                <select
                    name="category_id"
                    class="w-full border rounded-xl mt-2 p-4">

                    <option value="">Kategorie auswählen</option>

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>

                            {{ $category->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div>

                <label class="font-semibold">
                    Preis (€)
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price') }}"
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

            <div>

                <label class="font-semibold">
                    Angebotspreis (€)
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="sale_price"
                    value="{{ old('sale_price') }}"
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

            <div>

                <label class="font-semibold">
                    Lagerbestand
                </label>

                <input
                    type="number"
                    name="stock"
                    value="{{ old('stock') }}"
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

            <div>

                <label class="font-semibold">
                    Produktbilder
                </label>

                <input
                    type="file"
                    name="images[]"
                    multiple
                    class="w-full border rounded-xl mt-2 p-4">

            </div>

        </div>

        <div class="mt-8">

            <label class="font-semibold">

                Kurzbeschreibung

            </label>

            <textarea
                name="short_description"
                rows="3"
                class="w-full border rounded-xl mt-2 p-4">{{ old('short_description') }}</textarea>

        </div>

        <div class="mt-8">

            <label class="font-semibold">

                Beschreibung

            </label>

            <textarea
                name="description"
                rows="8"
                class="w-full border rounded-xl mt-2 p-4">{{ old('description') }}</textarea>

        </div>

        <div class="mt-10 flex gap-6">

            <button
                type="submit"
                class="bg-yellow-400 hover:bg-yellow-500 transition px-10 py-4 rounded-xl font-bold">

                Produkt speichern

            </button>

            <a href="{{ route('admin.products.index') }}"
               class="bg-gray-200 hover:bg-gray-300 transition px-10 py-4 rounded-xl">

                Abbrechen

            </a>

        </div>

    </form>

</div>

@endsection