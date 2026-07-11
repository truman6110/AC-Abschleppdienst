@extends('layouts.app')

@section('content')

<!-- Hero -->

<section class="bg-gray-900 text-white py-24">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[4px] text-yellow-400 font-semibold">
            Kontakt
        </span>

        <h1 class="mt-6 text-5xl md:text-6xl font-extrabold">
            Kontaktieren Sie uns
        </h1>

        <p class="mt-8 max-w-3xl mx-auto text-xl text-gray-300 leading-9">
            Haben Sie Fragen oder benötigen Sie ein individuelles Angebot?
            Unser Team hilft Ihnen gerne weiter.
        </p>

    </div>

</section>

<!-- Contact -->

<section class="py-24 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16">

        <!-- Formulaire -->

        <div class="bg-white rounded-3xl shadow-xl p-10">

            <h2 class="text-3xl font-bold mb-8">
                Nachricht senden
            </h2>

            <form>

                <div class="grid md:grid-cols-2 gap-6">

                    <input
                        type="text"
                        placeholder="Vorname"
                        class="border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-yellow-400">

                    <input
                        type="text"
                        placeholder="Nachname"
                        class="border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-yellow-400">

                </div>

                <input
                    type="email"
                    placeholder="E-Mail"
                    class="w-full border rounded-xl p-4 mt-6 focus:outline-none focus:ring-2 focus:ring-yellow-400">

                <input
                    type="tel"
                    placeholder="Telefon"
                    class="w-full border rounded-xl p-4 mt-6 focus:outline-none focus:ring-2 focus:ring-yellow-400">

                <textarea
                    rows="6"
                    placeholder="Ihre Nachricht..."
                    class="w-full border rounded-xl p-4 mt-6 resize-none focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>

                <button
                    class="mt-8 bg-yellow-400 hover:bg-yellow-500 transition px-8 py-4 rounded-xl font-bold">

                    Nachricht senden

                </button>

            </form>

        </div>

        <!-- Informations -->

        <div>

            <h2 class="text-3xl font-bold">
                Kontaktinformationen
            </h2>

            <div class="space-y-8 mt-10">

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        Adresse
                    </h3>

                    <p class="text-gray-600">
                        Deutschland
                    </p>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        Telefon
                    </h3>

                    <p class="text-gray-600">
                        +49 123 456 789
                    </p>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        E-Mail
                    </h3>

                    <p class="text-gray-600">
                        info@ac-abschleppdienst.de
                    </p>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h3 class="font-bold text-xl mb-3">
                        Öffnungszeiten
                    </h3>

                    <p class="text-gray-600">
                        Montag - Freitag : 08:00 - 18:00
                    </p>

                    <p class="text-gray-600">
                        Samstag : 09:00 - 14:00
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Carte -->

<section>

    <iframe
        src="https://www.google.com/maps?q=Berlin&output=embed"
        class="w-full h-[500px] border-0"
        loading="lazy">
    </iframe>

</section>

@endsection