@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 ">
            <table class="table text-danger">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gusto</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Impasto</th>
                    </tr>
                </thead>
                @foreach ($pizzas as $pizza)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $pizza->id }}</th>
                            <td>{{ $pizza->taste }}</td>
                            <td>{{ $pizza->price }}</td>
                            <td>{{ $pizza->tipe }}</td>
                            <td class="d-flex flex-row border-bottom-0 gap-2 ">
                                <a class="btn btn-success" href="{{ route('pizzas.show', $pizza->id) }}"><i
                                        class="fa-solid fa-info fa-bounce"></i> </a>
                                <a class="btn btn-primary" href="{{ route('pizzas.edit', $pizza->id) }}"><i
                                        class="fa-solid fa-gear fa-bounce"></i></a>

                                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger deletBtn" type="button">
                                        <i class="fa-solid fa-trash fa-bounce"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

        @include('partials.delete')

        <a class="btn btn-success my-5" href="{{ route('pizzas.create') }}">Aggiungine un altro</a>
        <a class="btn btn-warning my-5" href="{{ route('home') }}">Ritorna in home page</a>
    </div>
@endsection
