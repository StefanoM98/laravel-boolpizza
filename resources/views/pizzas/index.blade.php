@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Info</th>
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
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger deletBtn" type="button"><i
                                            class="fa-solid fa-trash fa-bounce"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
