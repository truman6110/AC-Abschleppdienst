@extends('layouts.app')

@section('content')

<!-- Hero -->

<section class="bg-gray-900 text-white py-24">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[4px] text-yellow-400 font-semibold">
            Über Uns
        </span>

        <h1 class="mt-6 text-5xl md:text-6xl font-extrabold">
            AC-Abschleppdienst
        </h1>

        <p class="mt-8 max-w-3xl mx-auto text-xl text-gray-300 leading-9">

            Ihr zuverlässiger Partner für hochwertige Anhänger.
            Qualität, Kompetenz und persönlicher Service stehen bei uns an erster Stelle.

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

            <p class="mt-8 text-gray-600 leading-9">

                AC-Abschleppdienst bietet hochwertige Anhänger für Privatkunden,
                Unternehmen und Handwerksbetriebe.

                Unser Ziel ist es, langlebige Produkte,
                faire Preise und einen ausgezeichneten Kundenservice anzubieten.

            </p>

        </div>

    </div>

</section>

<!-- Nos valeurs -->

<section class="py-24 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-10">

            <div class="bg-white rounded-2xl p-10 shadow">

                <div class="text-5xl mb-5">
                    
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Qualität
                </h3>

                <p>
                    Hochwertige Materialien und zuverlässige Verarbeitung.
                </p>

            </div>

            <div class="bg-white rounded-2xl p-10 shadow">

                <div class="text-5xl mb-5">
                    
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Vertrauen
                </h3>

                <p>
                    Ehrliche Beratung und langfristige Kundenbeziehungen.
                </p>

            </div>

            <div class="bg-white rounded-2xl p-10 shadow">

                <div class="text-5xl mb-5">
                    
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Lieferung
                </h3>

                <p>
                    Schnelle und sichere Lieferung in Deutschland.
                </p>

            </div>

            <div class="bg-white rounded-2xl p-10 shadow">

                <div class="text-5xl mb-5">
                    
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Service
                </h3>

                <p>
                    Persönlicher Support vor und nach dem Kauf.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection