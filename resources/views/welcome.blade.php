@extends('layouts.app')

@section('content')
    <!--switch light-dark mode-->
    <div class="wrapper-toggle">
        <input type="checkbox" id="themeSwitch" onchange="toggleTheme()">
        <i class="fa-solid fa-sun" style="color: #ffdf0f;"></i>
        <i class="fa-solid fa-moon" style="color: #0050db;"></i>
    </div>
    <!--/switch light-dark mode-->

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

    <script>
        function toggleTheme() {
            const themeSwitch = document.getElementById('themeSwitch');
            const body = document.body;
            const card = document.querySelectorAll('.card');
            console.log(card);

            if (themeSwitch.checked) {
                body.style.backgroundColor = 'black';
                body.style.color = 'red';
                for (let i = 0; i < 30; i++) {
                    card[i].style.backgroundColor = 'white';
                }
            } else {
                body.style.backgroundColor = 'white';
                body.style.color = 'black';
                for (let i = 0; i < 30; i++) {
                    card[i].style.backgroundColor = 'grey';
                }

            }
        }
    </script>
@endsection
