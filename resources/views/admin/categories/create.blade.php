@extends('admin.layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-4xl font-bold">

            Neue Kategorie

        </h1>

        <a href="{{ route('admin.categories.index') }}"
           class="bg-gray-800 text-white px-6 py-3 rounded-xl">

            Zurück

        </a>

    </div>

    @if($errors->any())

        <div class="bg-red-100 text-red-700 rounded-xl p-5 mb-6">

            <ul class="list-disc list-inside">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form method="POST"
          action="{{ route('admin.categories.store') }}"
          class="bg-white rounded-2xl shadow-xl p-10">

        @csrf

        <div>

            <label class="font-semibold">

                Kategoriename

            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full border rounded-xl mt-2 p-4">

        </div>

        <div class="mt-8">

            <label class="font-semibold">

                Beschreibung

            </label>

            <textarea
                name="description"
                rows="6"
                class="w-full border rounded-xl mt-2 p-4">{{ old('description') }}</textarea>

        </div>

        <button
            class="mt-8 bg-yellow-400 hover:bg-yellow-500 px-8 py-4 rounded-xl font-bold">

            Speichern

        </button>

    </form>

</div>

@endsection