<footer class="bg-black text-white">

    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-12">

            <!-- Logo -->

            <div>

                <h3 class="text-3xl font-bold text-yellow-400">
                    AC-Abschleppdienst
                </h3>

                <p class="mt-6 text-gray-400 leading-8">

                    Ihr zuverlässiger Partner für hochwertige Anhänger
                    in Deutschland.

                </p>

            </div>

            <!-- Navigation -->

            <div>

                <h4 class="text-xl font-bold mb-6">
                    Navigation
                </h4>

               <ul class="space-y-4 text-gray-400">

                    <li>
                        <a href="{{ route('home') }}" class="hover:text-yellow-400 transition">
                            Startseite
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('products') }}" class="hover:text-yellow-400 transition">
                            Anhänger
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="hover:text-yellow-400 transition">
                            Über uns
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-yellow-400 transition">
                            Kontakt
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Kontakt -->

            <div>

                <h4 class="text-xl font-bold mb-6">
                    Kontakt
                </h4>

                <ul class="space-y-4 text-gray-400">

                    <li>📞 +49 123 456 789</li>

                    <li>✉ info@ac-abschleppdienst.de</li>

                    <li>📍 Deutschland</li>

                </ul>

            </div>

            <!-- Öffnungszeiten -->

            <div>

                <h4 class="text-xl font-bold mb-6">
                    Öffnungszeiten
                </h4>

                <ul class="space-y-4 text-gray-400">

                    <li>Mo - Fr : 08:00 - 18:00</li>

                    <li>Samstag : 09:00 - 14:00</li>

                    <li>Sonntag : Geschlossen</li>

                </ul>

            </div>

        </div>

        <div class="border-t border-gray-800 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center">

            <p class="text-gray-500">

                © {{ date('Y') }} AC-Abschleppdienst. Alle Rechte vorbehalten.

            </p>

            <div class="flex gap-8 mt-6 md:mt-0">

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