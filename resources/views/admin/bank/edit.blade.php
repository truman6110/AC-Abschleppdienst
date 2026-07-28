@extends('admin.layouts.app')

@section('content')

<div class="max-w-4xl mx-auto">

    <h1 class="text-3xl font-bold mb-8">
        💳 Bankverbindung
    </h1>

    @if(session('success'))
        <div class="mb-6 rounded-lg bg-green-100 border border-green-300 p-4 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.bank.update') }}" method="POST">

        @csrf

        <div class="bg-white rounded-xl shadow p-8 space-y-6">

            <div>
                <label class="font-semibold">Bank</label>

                <input
                    type="text"
                    name="bank_name"
                    value="{{ old('bank_name',$bank->bank_name) }}"
                    class="mt-2 w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="font-semibold">Kontoinhaber</label>

                <input
                    type="text"
                    name="account_holder"
                    value="{{ old('account_holder',$bank->account_holder) }}"
                    class="mt-2 w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="font-semibold">IBAN</label>

                <input
                    type="text"
                    name="iban"
                    value="{{ old('iban',$bank->iban) }}"
                    class="mt-2 w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="font-semibold">BIC</label>

                <input
                    type="text"
                    name="bic"
                    value="{{ old('bic',$bank->bic) }}"
                    class="mt-2 w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="font-semibold">Nachricht</label>

                <textarea
                    name="message"
                    rows="4"
                    class="mt-2 w-full border rounded-lg p-3">{{ old('message',$bank->message) }}</textarea>
            </div>

            <button
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-lg">

                💾 Speichern

            </button>

        </div>

    </form>

</div>

@endsection