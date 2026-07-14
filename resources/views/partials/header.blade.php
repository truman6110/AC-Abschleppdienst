<header class="fixed top-0 left-0 w-full z-50">

    {{-- Top Bar --}}

    <div class="hidden md:block bg-black text-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-11 flex justify-between items-center text-sm">

                <div class="flex items-center gap-8">

                    <a href="tel:+49123456789"
                       class="hover:text-yellow-400 transition">

                        📞 +49 123 456 789

                    </a>

                    <a href="mailto:info@ac-abschleppdienst.de"
                       class="hover:text-yellow-400 transition">

                        ✉ info@ac-abschleppdienst.de

                    </a>

                </div>

                <div class="flex items-center gap-8">

                    <span>

                        🇩🇪 Deutschland

                    </span>

                    <span>

                        Premium Anhänger

                    </span>

                </div>

            </div>

        </div>

    </div>

    {{-- Navigation --}}

    <div class="bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-24 flex justify-between items-center">

                {{-- Logo --}}

                <a href="{{ route('home') }}"
                   class="flex flex-col">

                    <span class="text-3xl font-black tracking-tight">

                        <span class="text-yellow-500">

                            AC

                        </span>

                        Abschleppdienst

                    </span>

                    <span class="text-xs uppercase tracking-[4px] text-gray-500">

                        Premium Anhänger

                    </span>

                </a>

                {{-- Desktop Menu --}}

                <nav class="hidden lg:flex items-center gap-10">

                    <a href="{{ route('home') }}"
                       class="font-semibold hover:text-yellow-500 transition">

                        Startseite

                    </a>

                    <a href="{{ route('products') }}"
                       class="font-semibold hover:text-yellow-500 transition">

                        Anhänger

                    </a>

                    <a href="{{ route('about') }}"
                       class="font-semibold hover:text-yellow-500 transition">

                        Über uns

                    </a>

                    <a href="{{ route('contact') }}"
                       class="font-semibold hover:text-yellow-500 transition">

                        Kontakt

                    </a>

                </nav>

                {{-- Right Side --}}

                <div class="flex items-center gap-5">

                    <a href="{{ route('products') }}"
                       class="hidden lg:flex bg-yellow-400 hover:bg-yellow-500 px-7 py-3 rounded-xl font-bold shadow-lg transition">

                        Jetzt entdecken

                    </a>

                    {{-- Hamburger --}}

                    <button
                        id="mobile-menu-button"
                        class="lg:hidden w-12 h-12 rounded-xl border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition">

                        <svg
                            class="w-8 h-8"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"/>

                        </svg>

                    </button>

                </div>

            </div>

        </div>

    </div>

</header>

<div class="h-[96px] md:h-[136px]"></div>
{{-- ================= MOBILE MENU ================= --}}

<div
    id="mobile-menu"
    class="fixed inset-0 z-50 hidden">

    {{-- Overlay --}}

    <div
        id="mobile-overlay"
        class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

    {{-- Sidebar --}}

    <div
        id="mobile-sidebar"
        class="absolute right-0 top-0 h-full w-80 max-w-[90%] bg-white shadow-2xl translate-x-full transition-transform duration-300">

        <div class="p-8">

            {{-- Header --}}

            <div class="flex justify-between items-center">

                <div>

                    <h2 class="text-2xl font-black">

                        Menü

                    </h2>

                    <p class="text-gray-500 mt-1">

                        AC-Abschleppdienst

                    </p>

                </div>

                <button
                    id="mobile-menu-close"
                    class="w-12 h-12 rounded-xl hover:bg-gray-100 text-3xl transition">

                    ×

                </button>

            </div>

            {{-- CTA --}}

            <a
                href="{{ route('products') }}"
                class="mt-10 flex justify-center items-center bg-yellow-400 hover:bg-yellow-500 rounded-2xl py-4 font-bold text-lg transition">

                Jetzt entdecken

            </a>

            {{-- Navigation --}}

            <nav class="mt-10 flex flex-col">

                <a
                    class="mobile-link border-b py-5 hover:text-yellow-500 transition"
                    href="{{ route('home') }}">

                    🏠 Startseite

                </a>

                <a
                    class="mobile-link border-b py-5 hover:text-yellow-500 transition"
                    href="{{ route('products') }}">

                    🚚 Anhänger

                </a>

                <a
                    class="mobile-link border-b py-5 hover:text-yellow-500 transition"
                    href="{{ route('about') }}">

                    ℹ️ Über uns

                </a>

                <a
                    class="mobile-link border-b py-5 hover:text-yellow-500 transition"
                    href="{{ route('contact') }}">

                    ✉ Kontakt

                </a>

            </nav>

            {{-- Contact Box --}}

            <div class="mt-12 rounded-2xl bg-gray-100 p-6">

                <h3 class="font-bold text-lg">

                    Kontakt

                </h3>

                <p class="mt-4 text-gray-600">

                    📞 +49 123 456 789

                </p>

                <p class="mt-2 text-gray-600">

                    ✉ info@ac-abschleppdienst.de

                </p>

            </div>

        </div>

    </div>

</div>