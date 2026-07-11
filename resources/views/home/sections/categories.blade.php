<section class="py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Titre -->

        <div class="text-center mb-16">

            <span class="uppercase tracking-[4px] text-yellow-500 font-semibold">
                Unsere Produkte
            </span>

            <h2 class="mt-4 text-4xl md:text-5xl font-bold text-gray-900">
                Unsere Kategorien
            </h2>

            <p class="mt-6 max-w-2xl mx-auto text-gray-600 text-lg">
                Finden Sie den passenden Anhänger für Ihre privaten oder gewerblichen Anforderungen.
            </p>

        </div>

        <!-- Cards -->

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">

            <!-- PKW -->

            <div class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-2xl transition duration-500">

                <div class="overflow-hidden">

                    <img
                        src="{{ asset('images/categories/pkw.jpg') }}"
                        alt="PKW Anhänger"
                        class="h-64 w-full object-cover group-hover:scale-110 transition duration-700">

                </div>

                <div class="p-7">

                    <h3 class="text-2xl font-bold text-gray-900">
                        PKW Anhänger
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Robuste Anhänger für den täglichen Einsatz.
                    </p>

                    <a href="{{ route('products') }}"
                       class="inline-flex items-center mt-6 font-semibold text-yellow-500 hover:gap-3 transition-all">

                        Mehr erfahren →

                    </a>

                </div>

            </div>

            <!-- Kipper -->

            <div class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-2xl transition duration-500">

                <div class="overflow-hidden">

                    <img
                        src="{{ asset('images/categories/kipper.jpg') }}"
                        alt="Kipper"
                        class="h-64 w-full object-cover group-hover:scale-110 transition duration-700">

                </div>

                <div class="p-7">

                    <h3 class="text-2xl font-bold text-gray-900">
                        Kipper
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Leistungsstarke Kipper für Bau und Gewerbe.
                    </p>

                    <a href="{{ route('products') }}"
                       class="inline-flex items-center mt-6 font-semibold text-yellow-500 hover:gap-3 transition-all">

                        Mehr erfahren →

                    </a>

                </div>

            </div>

            <!-- Autotransporter -->

            <div class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-2xl transition duration-500">

                <div class="overflow-hidden">

                    <img
                        src="{{ asset('images/categories/autotransporter.jpg') }}"
                        alt="Autotransporter"
                        class="h-64 w-full object-cover group-hover:scale-110 transition duration-700">

                </div>

                <div class="p-7">

                    <h3 class="text-2xl font-bold text-gray-900">
                        Autotransporter
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Sicherer Fahrzeugtransport mit maximaler Stabilität.
                    </p>

                    <a href="{{ route('products') }}"
                       class="inline-flex items-center mt-6 font-semibold text-yellow-500 hover:gap-3 transition-all">

                        Mehr erfahren →

                    </a>

                </div>

            </div>

            <!-- Koffer -->

            <div class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-2xl transition duration-500">

                <div class="overflow-hidden">

                    <img
                        src="{{ asset('images/categories/koffer.jpg') }}"
                        alt="Kofferanhänger"
                        class="h-64 w-full object-cover group-hover:scale-110 transition duration-700">

                </div>

                <div class="p-7">

                    <h3 class="text-2xl font-bold text-gray-900">
                        Kofferanhänger
                    </h3>

                    <p class="mt-3 text-gray-600">
                        Geschlossene Anhänger für sicheren Warentransport.
                    </p>

                    <a href="{{ route('products') }}"
                       class="inline-flex items-center mt-6 font-semibold text-yellow-500 hover:gap-3 transition-all">

                        Mehr erfahren →

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>