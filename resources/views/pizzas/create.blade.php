@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserisci una nuova pizza</h1>

        <form action="{{ route('pizzas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="taste" class="form-label">Gusto</label>
                <input type="text" class="form-control" id="taste" name="taste">
            </div>


            <div class="mb-3">
                <label for="tipe" class="form-label">Impasto</label>
                <select id="tipe" name="tipe" class="form-select">
                    <option selected>Seleziona</option>
                    <option value="grilli">Grilli</option>
                    <option value="kamut">Kamut</option>
                    <option value="integral">Integral</option>

                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <button type="submit" class="btn btn-success">Invia</button>

        </form>
    </div>    
@endsection
