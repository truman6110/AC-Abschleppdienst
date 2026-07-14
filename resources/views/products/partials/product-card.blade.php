@php
    $cover = $product->images->firstWhere('is_cover', true) ?? $product->images->first();
@endphp

<article class="product-card">

    <a href="{{ route('product.show', $product) }}" class="product-image">

        @if($cover)

            <img
                src="{{ asset('storage/'.$cover->image) }}"
                alt="{{ $product->name }}"
            >

        @else

            <div class="product-no-image">

                Kein Bild

            </div>

        @endif

        <div class="product-overlay"></div>

        <span class="product-badge">

            {{ $product->condition }}

        </span>

    </a>

    <div class="product-content">

        <h3> 

            {{ $product->name }}

        </h3>

        <p>

            {{ Str::limit($product->short_description,90) }}

        </p>

        <div class="product-specs">

            <div>

                <strong>{{ $product->gross_weight ?? '-' }}</strong>

                <span>kg</span>

            </div>

            <div>

                <strong>{{ $product->axles ?? '-' }}</strong>

                <span>Achsen</span>

            </div>

        </div>

        <div class="product-footer">

            <div class="product-price">

                €

                {{ number_format($product->price,0,',','.') }}

            </div>

            <a
                href="{{ route('product.show',$product) }}"
                class="product-button"
            >

                Details →

            </a>

        </div>

    </div>

</article>