@extends('layouts.app')

@section('content')
    <h1 class="text-center">Pizza</h1>
    <div class="container">
        <h2>{{ $pizza->taste }}</h2>
        <img class="my-3" src="{{ Vite::asset('resources/img/img.jpg') }}" alt="Pizza">

        <ul class="list-group list-unstyled my-5">
            <li class="list-group-item">
                <p>
                    <strong>Gusto: </strong> {{ $pizza['taste'] }}
                </p>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Prezzo: </strong> {{ $pizza['price'] }}
                </div>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Impasto: </strong> {{ $pizza['tipe'] }}
                </div>
            </li>

            <li>
                <div class="my-4">
                    <h2>INGREDIENTI :</h2>
                    @forelse ($pizza->toppings as $topping)
                    <span>  {{ $topping->name }} {{ $loop->last ? '.' : ' ,'}}</span>
                    @empty
                        <span> Non ci sono ingredienti</span>
                    @endforelse

                </div>

            </li>
        </ul>
        <a href="{{ route('pizzas.index') }}" class="btn btn-primary my-3">Torna alla lista</a>
        <a href="{{ route('pizzas.edit', $pizza->id) }}" class="btn btn-warning my-3 mx-1 d-inline-block">Modifica</a>
    </div>
@endsection
