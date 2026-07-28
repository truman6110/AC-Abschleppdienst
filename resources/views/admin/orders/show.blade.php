@extends('admin.layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-8">

        <div>

            <h1 class="text-4xl font-bold">

                Bestellung

            </h1>

            <p class="text-gray-500 mt-2">

                {{ $order->order_number }}

            </p>

        </div>

        <a href="{{ route('admin.orders.index') }}"
           class="bg-gray-800 text-white px-6 py-3 rounded-xl">

            Zurück

        </a>

    </div>

    @if(session('success'))

        <div class="mb-8 bg-green-100 border border-green-300 text-green-700 rounded-xl p-5">

            {{ session('success') }}

        </div>

    @endif

    <div class="grid lg:grid-cols-2 gap-8">

        <div class="bg-white rounded-2xl shadow p-8">

            <h2 class="text-2xl font-bold mb-6">

                Kundendaten

            </h2>

            <div class="space-y-4">

                <p><strong>Name :</strong> {{ $order->first_name }} {{ $order->last_name }}</p>

                <p><strong>E-Mail :</strong> {{ $order->email }}</p>

                <p><strong>Telefon :</strong> {{ $order->phone }}</p>

                <p><strong>Straße :</strong> {{ $order->street }}</p>

              <p><strong>PLZ :</strong> {{ $order->zip }}</p>

                <p><strong>Stadt :</strong> {{ $order->city }}</p>

                <p><strong>Land :</strong> {{ $order->country }}</p>

            </div>

        </div>

        <div class="bg-white rounded-2xl shadow p-8">

            <h2 class="text-2xl font-bold mb-6">

                Bestellung

            </h2>

            <div class="space-y-4">

               <p>
                    <strong>Produkt :</strong>
                    {{ optional($order->items->first()?->product)->name ?? 'Produkt gelöscht' }}
                </p>

                <p>
                    <strong>Menge :</strong>
                    {{ $order->items->sum('quantity') }}
                </p>

                <p><strong>Status :</strong> {{ $order->status }}</p>

               
<p>Valeur : {{ $order->payment_proof }}</p>

@if($order->payment_proof)

    <div class="mt-4">
        <strong>Zahlungsnachweis :</strong><br>

        <a href="{{ asset('storage/'.$order->payment_proof) }}"
           target="_blank"
           class="inline-block mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Nachweis ansehen
        </a>
    </div>
@else
    <p><strong>Zahlungsnachweis :</strong> Keine Datei.</p>
@endif

                <p><strong>Nachricht :</strong></p>

                <div class="bg-gray-100 rounded-xl p-4">

                  {{ $order->comment ?: 'Keine Nachricht.' }}

                </div>

            </div>

            <form
                action="{{ route('admin.orders.update',$order) }}"
                method="POST"
                class="mt-8">

                @csrf
                @method('PUT')

                <label class="font-semibold">

                    Status ändern

                </label>

                <select
                    name="status"
                    class="w-full border rounded-xl mt-3 p-4">

                    @foreach([
                        'Neu',
                        'In Bearbeitung',
                        'Bestätigt',
                        'Versendet',
                        'Abgeschlossen',
                        'Storniert'
                    ] as $status)

                        <option
                            value="{{ $status }}"
                            @selected($order->status == $status)>

                            {{ $status }}

                        </option>

                    @endforeach

                </select>

                <button
                    class="mt-6 bg-yellow-400 hover:bg-yellow-500 px-8 py-4 rounded-xl font-bold">

                    Status speichern

                </button>

            </form>

        </div>

    </div>

</div>

@endsection