<footer class="bg-[#111827] text-white">

    <div class="max-w-7xl mx-auto px-6 py-24">

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-14">

            {{-- Entreprise --}}

            <div>

                <h2 class="text-4xl font-black text-yellow-400">

                    AC-Abschleppdienst

                </h2>

                <p class="mt-6 leading-8 text-gray-400">

                    Premium Anhänger für Privatpersonen und Unternehmen.
                    Qualität, Zuverlässigkeit und professionelle Beratung
                    in ganz Deutschland.

                </p>

                <div class="flex gap-4 mt-8">

                    <a href="#" class="w-11 h-11 rounded-full bg-gray-800 hover:bg-yellow-400 hover:text-black flex items-center justify-center transition">

                        f

                    </a>

                    <a href="#" class="w-11 h-11 rounded-full bg-gray-800 hover:bg-yellow-400 hover:text-black flex items-center justify-center transition">

                        in

                    </a>

                    <a href="#" class="w-11 h-11 rounded-full bg-gray-800 hover:bg-yellow-400 hover:text-black flex items-center justify-center transition">

                        ▶

                    </a>

                </div>

            </div>

            {{-- Navigation --}}

            <div>

                <h3 class="text-2xl font-bold mb-8">

                    Navigation

                </h3>

                <ul class="space-y-5">

                    <li>

                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-yellow-400 transition">

                            Startseite

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('products') }}" class="text-gray-400 hover:text-yellow-400 transition">

                            Anhänger

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('about') }}" class="text-gray-400 hover:text-yellow-400 transition">

                            Über uns

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('contact') }}" class="text-gray-400 hover:text-yellow-400 transition">

                            Kontakt

                        </a>

                    </li>

                </ul>

            </div>

            {{-- Kontakt --}}

            <div>

                <h3 class="text-2xl font-bold mb-8">

                    Kontakt

                </h3>

                <ul class="space-y-5 text-gray-400">

                    <li>

                        📞 +49 123 456 789

                    </li>

                    <li>

                        ✉ info@ac-abschleppdienst.de

                    </li>

                    <li>

                        📍 Deutschland

                    </li>

                    <li>

                        🚚 Lieferung deutschlandweit

                    </li>

                </ul>

            </div>

            {{-- Horaires --}}

            <div>

                <h3 class="text-2xl font-bold mb-8">

                    Öffnungszeiten

                </h3>

                <div class="space-y-4 text-gray-400">

                    <div class="flex justify-between">

                        <span>Mo - Fr</span>

                        <strong class="text-white">

                            08:00 - 18:00

                        </strong>

                    </div>

                    <div class="flex justify-between">

                        <span>Samstag</span>

                        <strong class="text-white">

                            09:00 - 14:00

                        </strong>

                    </div>

                    <div class="flex justify-between">

                        <span>Sonntag</span>

                        <strong class="text-red-400">

                            Geschlossen

                        </strong>

                    </div>

                </div>

            </div>

        </div>

        <div class="border-t border-gray-800 mt-20 pt-8 flex flex-col lg:flex-row justify-between items-center">

            <p class="text-gray-500 text-center lg:text-left">

                © {{ date('Y') }}
                AC-Abschleppdienst.
                Alle Rechte vorbehalten.

            </p>

            <div class="flex flex-wrap gap-8 mt-6 lg:mt-0">

                <a href="#" class="text-gray-500 hover:text-yellow-400 transition">

                    Impressum

                </a>

                <a href="#" class="text-gray-500 hover:text-yellow-400 transition">

                    Datenschutz

                </a>

                <a href="#" class="text-gray-500 hover:text-yellow-400 transition">

                    AGB

                </a>

            </div>

        </div>

    </div>

</footer>