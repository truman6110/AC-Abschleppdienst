<aside class="w-72 bg-gray-900 text-white min-h-screen">

    <div class="p-8 border-b border-gray-800">

        <h1 class="text-2xl font-bold">

            AC Admin

        </h1>

    </div>

    <nav class="mt-8">

                <a href="{{ route('admin.dashboard') }}"
            class="block px-8 py-4 hover:bg-gray-800 transition">

                📊 Dashboard

            </a>

            <a href="{{ route('categories.index') }}"
            class="block px-8 py-4 hover:bg-gray-800 transition">

                📂 Kategorien

            </a>

            <a href="{{ route('products.index') }}"
            class="block px-8 py-4 hover:bg-gray-800 transition">

                🚛 Produkte

            </a>

            <a href="{{ route('quotes.index') }}"
            class="block px-8 py-4 hover:bg-gray-800 transition">

                📩 Angebote

            </a>
    </nav>

</aside>