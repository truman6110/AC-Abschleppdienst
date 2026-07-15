@extends('layouts.app')

@section('content')

@section('title','Über uns | AC-Abschleppdienst')

@section('description','Erfahren Sie mehr über AC-Abschleppdienst, Ihren zuverlässigen Partner für Premium Anhänger in Deutschland.')

<!-- Hero -->

<section class="bg-gradient-to-r from-gray-900 via-black to-gray-900 text-white py-28">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[5px] text-yellow-400 font-bold">

            Über AC-Abschleppdienst

        </span>

        <h1 class="mt-6 text-6xl font-black leading-tight">

            Premium Anhänger
            <br>
            für höchste Ansprüche

        </h1>

        <p class="mt-8 max-w-4xl mx-auto text-xl text-gray-300 leading-9">

            Seit vielen Jahren begleiten wir Privatpersonen und Unternehmen
            bei der Auswahl hochwertiger Anhänger. Qualität, Zuverlässigkeit
            und persönlicher Service stehen bei jeder Bestellung im Mittelpunkt.

        </p>

    </div>

</section>

<!-- Notre histoire -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

        <div>

            <img
                src="{{ asset('images/hero/hero-main.jpg') }}"
                class="rounded-3xl shadow-xl w-full"
                alt="">

        </div>

        <div>

            <span class="uppercase tracking-[4px] text-yellow-500 font-semibold">
                Unsere Geschichte
            </span>

            <h2 class="mt-5 text-4xl font-bold">
                Qualität seit vielen Jahren
            </h2>

                        <p class="mt-8 text-gray-600 leading-9 text-lg">

                AC-Abschleppdienst steht für Qualität, Vertrauen und Zuverlässigkeit.

                Unser Unternehmen hat sich darauf spezialisiert,
                hochwertige Anhänger für Privatpersonen, Handwerker,
                Unternehmen und professionelle Transporte anzubieten.

                Von der persönlichen Beratung bis zur Auslieferung begleiten
                wir unsere Kunden mit einem schnellen und professionellen Service.

                Unser Ziel ist es, langlebige Produkte,
                faire Preise und höchste Kundenzufriedenheit zu garantieren.

            </p>
        </div>

    </div>

</section>

<!-- Nos valeurs -->
<section class="py-24 bg-[#f8fafc]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="uppercase tracking-[4px] text-yellow-500 font-bold">

                Warum wir

            </span>

            <h2 class="mt-5 text-5xl font-black text-gray-900">

                Warum AC-Abschleppdienst?

            </h2>

            <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">

                Unser Anspruch ist es, Qualität, Service und Zuverlässigkeit
                in jedem einzelnen Anhänger zu vereinen.

            </p>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

            <div class="group bg-white rounded-[28px] p-10 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition duration-500">

                <div class="text-6xl">

                    ⭐

                </div>

                <h3 class="mt-8 text-2xl font-black">

                    Premium Qualität

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Hochwertige Materialien,
                    präzise Verarbeitung
                    und maximale Langlebigkeit.

                </p>

            </div>

            <div class="group bg-white rounded-[28px] p-10 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition duration-500">

                <div class="text-6xl">

                    🤝

                </div>

                <h3 class="mt-8 text-2xl font-black">

                    Vertrauen

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Persönliche Beratung,
                    transparente Preise
                    und langfristige Partnerschaften.

                </p>

            </div>

            <div class="group bg-white rounded-[28px] p-10 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition duration-500">

                <div class="text-6xl">

                    🚚

                </div>

                <h3 class="mt-8 text-2xl font-black">

                    Schnelle Lieferung

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Deutschlandweite Lieferung
                    mit zuverlässigen
                    Logistikpartnern.

                </p>

            </div>

            <div class="group bg-white rounded-[28px] p-10 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition duration-500">

                <div class="text-6xl">

                    🛠️

                </div>

                <h3 class="mt-8 text-2xl font-black">

                    Persönlicher Service

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Wir begleiten Sie
                    vor, während und nach
                    Ihrem Kauf.

                </p>

            </div>

        </div>

    </div>

</section>
<!-- Zahlen -->

<section class="py-24 bg-gray-900 text-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="uppercase tracking-[4px] text-yellow-400 font-bold">

                Unsere Zahlen

            </span>

            <h2 class="mt-5 text-5xl font-black">

                Vertrauen durch Erfahrung

            </h2>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

            <div class="text-center">

                <h3 class="text-6xl font-black text-yellow-400">

                    2500+

                </h3>

                <p class="mt-4 text-gray-300 text-lg">

                    Verkaufte Anhänger

                </p>

            </div>

            <div class="text-center">

                <h3 class="text-6xl font-black text-yellow-400">

                    98%

                </h3>

                <p class="mt-4 text-gray-300 text-lg">

                    Zufriedene Kunden

                </p>

            </div>

            <div class="text-center">

                <h3 class="text-6xl font-black text-yellow-400">

                    24h

                </h3>

                <p class="mt-4 text-gray-300 text-lg">

                    Antwortzeit

                </p>

            </div>

            <div class="text-center">

                <h3 class="text-6xl font-black text-yellow-400">

                    15+

                </h3>

                <p class="mt-4 text-gray-300 text-lg">

                    Jahre Erfahrung

                </p>

            </div>

        </div>

    </div>

</section>

<!-- Mission -->

<section class="py-24 bg-white">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[4px] text-yellow-500 font-bold">

            Unsere Mission

        </span>

        <h2 class="mt-6 text-5xl font-black">

            Qualität ohne Kompromisse

        </h2>

        <p class="mt-10 text-xl text-gray-600 leading-10 max-w-4xl mx-auto">

            Unser Ziel ist es, hochwertige Anhänger anzubieten,
            die Sicherheit, Langlebigkeit und modernes Design vereinen.

            Wir begleiten jeden Kunden persönlich,
            von der Beratung bis zur Lieferung,
            damit jeder den perfekten Anhänger für seine Bedürfnisse findet.

        </p>

    </div>

</section>

<!-- CTA -->

<section class="py-24 bg-yellow-400">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-5xl font-black text-black">

            Bereit für Ihren neuen Anhänger?

        </h2>

        <p class="mt-8 text-xl text-black/80 leading-9">

            Entdecken Sie jetzt unser gesamtes Sortiment
            und finden Sie den Anhänger,
            der perfekt zu Ihrem Projekt passt.

        </p>

        <div class="mt-12 flex flex-col sm:flex-row justify-center gap-6">

            <a
                href="{{ route('products') }}"
                class="bg-black hover:bg-gray-900 text-white px-10 py-5 rounded-2xl font-bold transition">

                Alle Produkte ansehen

            </a>

            <a
                href="{{ route('contact') }}"
                class="border-2 border-black hover:bg-black hover:text-white px-10 py-5 rounded-2xl font-bold transition">

                Kontakt aufnehmen

            </a>

        </div>

    </div>

</section>


@endsection