@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-4xl font-bold">
            Kategorien
        </h1>

        <p class="text-gray-500 mt-2">
            Verwalten Sie alle Kategorien.
        </p>

    </div>

    <a href="{{ route('admin.categories.create') }}"
       class="bg-yellow-400 hover:bg-yellow-500 px-6 py-3 rounded-xl font-bold">

        + Neue Kategorie

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

                <th class="text-left p-5">Name</th>

                <th class="text-left p-5">Slug</th>

                <th class="text-left p-5">Status</th>

                <th class="text-center p-5">Aktionen</th>

            </tr>

        </thead>

        <tbody>

        @forelse($categories as $category)

            <tr class="border-t">

                <td class="p-5 font-semibold">

                    {{ $category->name }}

                </td>

                <td class="p-5">

                    {{ $category->slug }}

                </td>

                <td class="p-5">

                    @if($category->status)

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">

                            Aktiv

                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">

                            Inaktiv

                        </span>

                    @endif

                </td>

                                        <td class="text-center p-5">

                            <div class="flex justify-center items-center gap-4">

                                <a href="{{ route('admin.categories.edit', $category) }}"
                                class="text-blue-600 hover:text-blue-800 font-semibold">

                                    Bearbeiten

                                </a>

                                <form action="{{ route('admin.categories.destroy', $category) }}"
                                    method="POST"
                                    onsubmit="return confirm('Möchten Sie diese Kategorie wirklich löschen?');">

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

                <td colspan="4" class="text-center py-12 text-gray-500">

                    Keine Kategorie vorhanden.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@if($categories->count())

<div class="mt-8">

    {{ $categories->links() }}

</div>

@endif

@endsection