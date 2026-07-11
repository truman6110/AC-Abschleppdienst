<section class="relative h-screen overflow-hidden">

    <!-- Background -->
    <img
        src="{{ asset('images/hero/hero-main.jpg') }}"
        alt="AC-Abschleppdienst"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/55 to-black/20"></div>

    <!-- Content -->
    <div class="relative z-10 flex items-center h-full">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-3xl">

                <span class="uppercase tracking-[5px] text-yellow-400 font-semibold">
                    Willkommen bei AC-Abschleppdienst
                </span>

                <h1 class="mt-6 text-5xl md:text-7xl font-extrabold text-white leading-tight">
                    Professionelle Anhänger
                    <br>
                    für jeden Bedarf.
                </h1>

                <p class="mt-8 text-xl text-gray-200 leading-9">
                    Hochwertige Anhänger für Privatpersonen und Unternehmen.
                    Qualität, Sicherheit und Zuverlässigkeit.
                </p>

                <div class="mt-12 flex flex-wrap gap-5">

                    <a href="{{ route('products') }}"
                        class="bg-yellow-400 hover:bg-yellow-500 transition px-8 py-4 rounded-xl font-bold text-black">

                        Jetzt entdecken

                    </a>

                    <a href="{{ route('contact') }}"
                        class="border border-white hover:bg-white hover:text-black transition px-8 py-4 rounded-xl text-white font-semibold">

                        Kontakt

                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- Scroll -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">

        <div class="w-7 h-12 border-2 border-white rounded-full flex justify-center">

            <div class="w-1.5 h-3 bg-white rounded-full mt-2 animate-bounce"></div>

        </div>

    </div>

</section>