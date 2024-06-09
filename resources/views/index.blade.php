@extends('layouts.app')

@section('content')

  <section class="bg-section">
    <div class="container d-flex justify-content-between flex-wrap">
      <h1 class="text-center">Prodotti</h1>
      <div class="row g-3 wrap d-flex justify-content-between">
        @foreach ($products as $product)
          <div class="col-8 col-md-6 col-lg-4 ">
            @include('partials.card')
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection