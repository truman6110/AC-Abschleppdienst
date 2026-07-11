<header class="fixed top-0 left-0 w-full z-50">

    <!-- Top Bar -->
    <div class="bg-black text-white text-sm">

        <div class="max-w-7xl mx-auto px-6 h-10 flex items-center justify-between">

            <div class="flex items-center gap-8">

                <a href="tel:+49123456789" class="hover:text-yellow-400 transition">
                    📞 +49 123 456 789
                </a>

                <a href="mailto:info@ac-abschleppdienst.de" class="hover:text-yellow-400 transition">
                    ✉ info@ac-abschleppdienst.de
                </a>

            </div>

            <span class="font-medium">
                🇩🇪 Deutsch
            </span>

        </div>

    </div>

    <!-- Navigation -->
    <div class="bg-white shadow-lg">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-24 flex items-center justify-between">

                <!-- Logo -->

                <a href="/" class="text-3xl font-extrabold text-gray-900">

                    <span class="text-yellow-500">AC</span>-Abschleppdienst

                </a>

                <!-- Menu Desktop -->

                <nav class="hidden lg:flex items-center gap-10">

                    <a href="{{ route('home') }}" class="font-semibold text-gray-700 hover:text-yellow-500 transition">
                        Startseite
                    </a>

                    <a href="{{ route('products') }}" class="font-semibold text-gray-700 hover:text-yellow-500 transition">
                        Anhänger
                    </a>
<!-- 
                    <a  class="font-semibold text-gray-700 hover:text-yellow-500 transition">
                        Service
                    </a>
-->
                    <a href="{{ route('about') }}" class="font-semibold text-gray-700 hover:text-yellow-500 transition">
                        Über uns
                    </a>

                    <a href="{{ route('contact') }}" class="font-semibold text-gray-700 hover:text-yellow-500 transition">
                        Kontakt
                    </a>

                </nav>

                <!-- Button -->

               <a href="{{ route('products') }}"
                      class="hidden lg:flex bg-yellow-400 hover:bg-yellow-500 transition px-7 py-3 rounded-xl font-bold text-black shadow-lg">

                             Jetzt entdecken

                </a>

                <!-- Mobile Button -->

                <button
                    class="lg:hidden text-3xl text-gray-800">

                    ☰

                </button>

            </div>

        </div>

    </div>

</header>

<!-- Spacer -->

<div class="h-[136px]"></div>