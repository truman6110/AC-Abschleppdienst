@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-4xl font-bold">
            Angebotsanfragen
        </h1>

        <p class="text-gray-500 mt-2">
            Alle eingegangenen Kundenanfragen.
        </p>

    </div>

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

                <th class="text-left p-5">Produkt</th>

                <th class="text-left p-5">Telefon</th>

                <th class="text-left p-5">Status</th>

                <th class="text-left p-5">Datum</th>

                <th class="text-center p-5">Aktionen</th>

            </tr>

        </thead>

        <tbody>

        @forelse($quotes as $quote)

            <tr class="border-t">

                <td class="p-5">

                    <div class="font-semibold">

                        {{ $quote->firstname }} {{ $quote->lastname }}

                    </div>

                    <div class="text-sm text-gray-500">

                        {{ $quote->email }}

                    </div>

                </td>

                <td class="p-5">

                    {{ optional($quote->product)->name ?? '-' }}

                </td>

                <td class="p-5">

                    {{ $quote->phone ?: '-' }}

                </td>

                <td class="p-5">

                    @if($quote->status == 'new')

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">

                            Neu

                        </span>

                    @elseif($quote->status == 'contacted')

                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">

                            Kontaktiert

                        </span>

                    @elseif($quote->status == 'completed')

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">

                            Abgeschlossen

                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">

                            Storniert

                        </span>

                    @endif

                </td>

                <td class="p-5">

                    {{ $quote->created_at->format('d.m.Y') }}

                </td>

                <td class="p-5">

                    <div class="flex justify-center">

                        <a href="{{ route('admin.quotes.show',$quote) }}"
                           class="text-blue-600 hover:text-blue-800 font-semibold">

                            Anzeigen

                        </a>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6"
                    class="text-center py-16 text-gray-500">

                    Keine Angebotsanfragen vorhanden.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@if($quotes->count())

<div class="mt-8">

    {{ $quotes->links() }}

</div>

@endif

@endsection