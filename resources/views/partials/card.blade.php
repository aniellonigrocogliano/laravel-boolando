<div class="mscard card" style="width: 18rem;">

        <div class="image-container" />
            <img  src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" class="card-img-top normal-image" alt="{{$product['name']}}">
            <img src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" class="card-img-top hover-image" alt="{{$product['name']}}">
        </div> 

    <div class="card-body">
      <p class="card-text">{{$product['brand']}}</p>
      <h5 class="card-title">{{$product['name']}}</h5>
      <p class="card-text"><span class="text-danger"> {{$product['price']}} <i class="fa-solid fa-euro-sign"></i></span> </p>
    </div>
  </div>