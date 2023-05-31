@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-wrap text-center">
        <div class="row row-cols-4">
            @foreach ($pizzas as $pizza)
                <div class="col g-3">
                    <div class="card p-4 border-0">
                        <div class="card-body">
                            <img class="my-3" src={{ Vite::asset('resources/img/Img.jpg') }} alt="">
                            <h5 class="card-title"><span>Gusto: </span> {{ $pizza->taste }}</h5>
                            <p class="card-text"><span>Prezzo: </span> {{ $pizza->price }}€</p>
                            <p class="card-text"><span>Impasto: </span> {{ $pizza->tipe }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
