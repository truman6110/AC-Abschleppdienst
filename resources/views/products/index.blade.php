@extends('layouts.app')

@section('content')
@section('title','Anhänger kaufen | AC-Abschleppdienst')

@section('description','Entdecken Sie hochwertige Anhänger für Privatpersonen und Unternehmen.')

@include('products.partials.hero')

<section class="products-section" id="products-list">

    <div class="products-container">

        <div class="products-header">

            <div>

                <span class="products-subtitle">

                    PREMIUM AUSWAHL

                </span>

                <h2>

                    Alle Anhänger

                </h2>

            </div>

            <div class="products-count">

                {{ $products->total() }} Produkte gefunden

            </div>

        </div>

        <div class="products-layout">

            <aside>

                @include('products.partials.filters')

            </aside>

            <main>

                @if($products->count())

                    <div class="products-grid">

                        @foreach($products as $product)

                            @include('products.partials.product-card')

                        @endforeach

                    </div>

                    <div class="products-pagination flex justify-center gap-4 mt-10">

    @if ($products->previousPageUrl())
        <a href="{{ $products->previousPageUrl() }}" class="product-button">
            ← Zurück
        </a>
    @endif

    @if ($products->nextPageUrl())
        <a href="{{ $products->nextPageUrl() }}" class="product-button">
            Weiter →
        </a>
    @endif

</div>

                @else

                    <div class="products-empty">

                        <h3>

                            Keine Anhänger gefunden.

                        </h3>

                        <p>

                            Bitte versuchen Sie eine andere Kategorie.

                        </p>

                    </div>

                @endif

            </main>

        </div>

    </div>

</section>

@endsection