@extends('layouts.app')

@section('title','Banküberweisung')

@section('content')

<div class="max-w-4xl mx-auto py-20">

    <h1 class="text-4xl font-bold mb-8">
        Vielen Dank für Ihre Bestellung
    </h1>

    <div class="bg-white rounded-3xl shadow p-10">

        <h2 class="text-2xl font-bold">
            Bestellnummer
        </h2>

        <p class="text-xl mb-8">
            {{ $order->order_number }}
        </p>
            <div class="bg-white rounded-3xl shadow p-10 mt-8">

    <h2 class="text-2xl font-bold mb-8">
        🏦 Bankverbindung
    </h2>

    <p class="text-gray-500 mb-8">
        Bitte überweisen Sie den Gesamtbetrag auf das folgende Konto.
        Verwenden Sie unbedingt Ihre Bestellnummer als Verwendungszweck.
    </p>

    <div class="space-y-6">

        <div class="flex justify-between items-center border-b pb-4">
            <div>
                <p class="text-gray-500">Bank</p>
                <p id="bank" class="font-semibold">{{ $bank->bank_name }}</p>
            </div>

            <button type="button"
                onclick="copyField('bank')"
                class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg">
                📋 Kopieren
            </button>
        </div>

        <div class="flex justify-between items-center border-b pb-4">
            <div>
                <p class="text-gray-500">Kontoinhaber</p>
                <p id="holder" class="font-semibold">{{ $bank->account_holder }}</p>
            </div>

            <button type="button"
                onclick="copyField('holder')"
                class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg">
                📋 Kopieren
            </button>
        </div>

        <div class="flex justify-between items-center border-b pb-4">
            <div>
                <p class="text-gray-500">IBAN</p>
                <p id="iban" class="font-semibold">{{ $bank->iban }}</p>
            </div>

            <button type="button"
                onclick="copyField('iban')"
                class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg">
                📋 Kopieren
            </button>
        </div>

        <div class="flex justify-between items-center border-b pb-4">
            <div>
                <p class="text-gray-500">BIC</p>
                <p id="bic" class="font-semibold">{{ $bank->bic }}</p>
            </div>

            <button type="button"
                onclick="copyField('bic')"
                class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg">
                📋 Kopieren
            </button>
        </div>

        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500">Verwendungszweck</p>
                <p id="reference" class="font-bold text-yellow-600">
                    {{ $order->order_number }}
                </p>
            </div>

            <button type="button"
                onclick="copyField('reference')"
                class="bg-yellow-400 hover:bg-yellow-500 px-4 py-2 rounded-lg font-semibold">
                📋 Kopieren
            </button>
        </div>

    </div>

</div>

        <h2 class="text-2xl font-bold">
            Zu zahlender Betrag
        </h2>

        <p class="text-4xl font-bold text-yellow-500">
            € {{ number_format($order->total,2,',','.') }}
        </p>

    </div>

    <hr class="my-10">

    @if(session('success'))
        <div class="mb-8 bg-blue-100 border border-blue-300 text-blue-800 rounded-2xl p-6">
            <h3 class="text-xl font-bold mb-2">
                ✅ Zahlungsnachweis erfolgreich gesendet
            </h3>

            <p>
                Vielen Dank. Ihr Zahlungsnachweis wurde erfolgreich übermittelt.
                Unser Team wird Ihre Zahlung schnellstmöglich prüfen.
            </p>
        </div>
    @endif

    <h2 class="text-2xl font-bold mb-6">
        Zahlungsnachweis hochladen
    </h2>

    @if($order->payment_proof)

        <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">

            <h3 class="text-xl font-bold text-blue-700 mb-3">
                Zahlungsnachweis bereits gesendet
            </h3>

            <p class="text-gray-700">
                Sie haben Ihren Zahlungsnachweis bereits hochgeladen.
                Bitte warten Sie auf die Bestätigung unseres Teams.
            </p>

            <a href="{{ asset('storage/'.$order->payment_proof) }}"
               target="_blank"
               class="inline-block mt-5 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl">
                Nachweis ansehen
            </a>

        </div>

    @else

        <form
            action="{{ route('payment.upload',$order) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="mb-5">

                <label class="font-semibold">
                    Screenshot oder PDF
                </label>

                <input
                    type="file"
                    name="payment_proof"
                    accept=".jpg,.jpeg,.png,.pdf"
                    required
                    class="mt-2 block w-full border rounded-lg p-3">

            </div>
                        <button
                type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl transition">

                Ich habe überwiesen

            </button>

        </form>

    @endif

</div>
<script>
function copyField(id)
{
    const text = document.getElementById(id).innerText;

    navigator.clipboard.writeText(text).then(() => {

        const button = event.target;

        const oldText = button.innerHTML;

        button.innerHTML = "✅ Kopiert";

        setTimeout(() => {
            button.innerHTML = oldText;
        }, 1500);

    });
}
</script>

@endsection