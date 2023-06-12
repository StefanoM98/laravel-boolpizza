@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inserisci una nuova pizza</h1>

    <form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="taste" class="form-label">Gusto</label>
            <input type="text" class="form-control" id="taste" name="taste" value="{{ $pizza->taste }}">
        </div>


        <div class="mb-3">
            <label for="tipe" class="form-label">Impasto</label>
            <select id="tipe" name="tipe" class="form-select">
                <option value="grilli" @selected($pizza->tipe === 'grilli')>Grilli</option>
                <option value="kamut" @selected($pizza->tipe === 'kamut')>Kamut</option>
                <option value="integral" @selected($pizza->tipe === 'integral')>Integral</option>

            </select>
        </div>

        <div class="form-group my-5 ">
            <h4 class="my-3 ">Toppings che vuoi mettere: </h4>
            <div class="d-flex justify-content-center my-3 gap-3">
                @foreach ($toppings as $key => $topping)

                    <label for="topping-{{ $topping->id }}">{{ $topping->name }}</label>
                    <input type="checkbox" name="toppings[]" id="topping-{{ $topping->id }}"
                        value="{{ $topping->id }}" @checked(old('toppings')
                                ? in_array($topping->id, old('toppings', []))
                                : $pizza->toppings->contains($topping))>

                    @error('toppings')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $pizza->price }}">
        </div>

        <button type="submit" class="btn btn-success">Invia</button>

    </form>
</div>    
@endsection
