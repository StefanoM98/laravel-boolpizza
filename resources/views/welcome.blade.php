@extends('layouts.app')

@section('content')
<div class="container d-flex flex-wrap text-center">
    <div class="row row-cols-4">
        @foreach ($pizzas as $pizza)
          <div class="col g-3">
            <div class="card p-4">
                <div class="card-body">
                    <h5 class="card-title">Pizza:{{ $pizza->taste }}</h5>
                    <p class="card-text">Prezzo: {{ $pizza->price }}€</p>

                </div>
            </div>
          </div>
        @endforeach
    </div>
   
</div>      
@endsection
