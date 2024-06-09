<div class="mscard card">

    <div class="image-container" />
    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" class="card-img-top normal-image"
        alt="{{ $product['name'] }}">
    <img src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" class="card-img-top hover-image"
        alt="{{ $product['name'] }}">
    <div class="d-flex flex-nowrap badge align-items-center">
        @foreach ($product['badges'] as $badge)
            @if ($badge['type'] === 'tag')
                <div class="tag me-2 mt-1">{{ $badge['value'] }}</div>
            @endif
            @if ($badge['type'] === 'discount')
                <div class="discount me-2 mt-1">{{ $badge['value'] }}</div>
            @endif
        @endforeach

    </div>
    <div class="heart">
        @if ($product['isInFavorites'])
            <div class=" hred"><i class="fa-solid fa-heart"></i></div>
        @endif
        @if (!$product['isInFavorites'])
            <div class=" hblack"><i class="fa-solid fa-heart"></i></div>
        @endif
    </div>
</div>

<div class="card-body">

    <p class="card-text">{{ $product['brand'] }}</p>
    <h5 class="card-title">{{ $product['name'] }}</h5>
    <p class="card-text">
        @foreach ($product['badges'] as $badge)
            @if (collect($product['badges'])->contains('type', 'discount'))
                @if ($badge['type'] === 'discount')
                    @php
                        $discount = str_replace('-', '', $badge['value']);
                        $discount = str_replace('%', '', $discount);
                        $discount = intval($discount);
                        $discount = $product['price'] / (1 - $discount / 100);
                        $discount = number_format($discount, 2);

                    @endphp
                    <span class="text-danger"> {{ $product['price'] }} <i class="fa-solid fa-euro-sign"></i></span>
                    <span class="text-dark text-decoration-line-through"> {{ $discount }} <i
                            class="fa-solid fa-euro-sign"></i></span>
                @endif
            @else
                <span class="text-danger"> {{ $product['price'] }} <i class="fa-solid fa-euro-sign"></i></span>
            @endif
        @endforeach
    </p>
</div>
</div>
