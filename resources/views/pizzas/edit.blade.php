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

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $pizza->price }}">
        </div>

        <button type="submit" class="btn btn-success">Invia</button>

    </form>
</div>    
@endsection
