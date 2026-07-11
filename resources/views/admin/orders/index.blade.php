@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-4xl font-bold">

            Bestellungen

        </h1>

        <p class="text-gray-500 mt-2">

            Verwalten Sie alle Bestellungen.

        </p>

    </div>

</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-5">Bestellnummer</th>

                <th class="text-left p-5">Kunde</th>

                <th class="text-left p-5">Produkt</th>

                <th class="text-center p-5">Menge</th>

                <th class="text-center p-5">Status</th>

                <th class="text-center p-5">Aktionen</th>

            </tr>

        </thead>

        <tbody>

        @forelse($orders as $order)

            <tr class="border-t hover:bg-gray-50">

                <td class="p-5 font-semibold">

                    {{ $order->order_number }}

                </td>

                <td class="p-5">

                    {{ $order->first_name }} {{ $order->last_name }}

                </td>

                <td class="p-5">

                    {{ $order->product->name }}

                </td>

                <td class="p-5 text-center">

                    {{ $order->quantity }}

                </td>

                <td class="p-5 text-center">

                    @switch($order->status)

                        @case('Neu')

                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                Neu
                            </span>

                            @break

                        @case('In Bearbeitung')

                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
                                In Bearbeitung
                            </span>

                            @break

                        @case('Bestätigt')

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                Bestätigt
                            </span>

                            @break

                        @case('Versendet')

                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full">
                                Versendet
                            </span>

                            @break

                        @case('Abgeschlossen')

                            <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full">
                                Abgeschlossen
                            </span>

                            @break

                        @default

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                                Storniert
                            </span>

                    @endswitch

                </td>

                <td class="p-5">

                    <div class="flex justify-center gap-4">

                        <a href="{{ route('orders.show',$order) }}"
                           class="text-blue-600 hover:text-blue-800">

                            Anzeigen

                        </a>

                        <form action="{{ route('orders.destroy',$order) }}"
                              method="POST"
                              onsubmit="return confirm('Bestellung löschen?')">

                            @csrf
                            @method('DELETE')

                            <button
                                class="text-red-600 hover:text-red-800">

                                Löschen

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6"
                    class="text-center py-20 text-gray-500">

                    Keine Bestellungen vorhanden.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@if($orders->count())

<div class="mt-8">

    {{ $orders->links() }}

</div>

@endif

@endsection