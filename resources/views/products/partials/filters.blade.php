<div class="products-sidebar">

    <div class="filter-card">

        <h3>Kategorien</h3>

        <a
            href="{{ route('products') }}"
            class="{{ request('category') ? '' : 'active' }}"
        >
            Alle Anhänger
        </a>

        @foreach($categories as $category)

            <a
                href="{{ route('products',['category'=>$category->id]) }}"
                class="{{ request('category') == $category->id ? 'active' : '' }}"
            >

                {{ $category->name }}

            </a>

        @endforeach

    </div>

    <div class="filter-card">

        <h3>Zustand</h3>

        <label>

            <input type="checkbox">

            Neu

        </label>

        <label>

            <input type="checkbox">

            Gebraucht

        </label>

    </div>

    <div class="filter-card">

        <h3>Preis</h3>

        <input
            type="range"
            min="500"
            max="30000"
            value="10000"
            class="price-range"
        >

        <div class="price-values">

            <span>500 €</span>

            <span>30.000 €</span>

        </div>

    </div>

    <div class="filter-card">

        <h3>Warum wir?</h3>

        <ul>

            <li>✔ Premium Qualität</li>

            <li>✔ Deutschlandweite Lieferung</li>

            <li>✔ Persönliche Beratung</li>

            <li>✔ Sichere Zahlung</li>

        </ul>

    </div>

</div>