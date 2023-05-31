<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @include('partials.header')
      <!--switch light-dark mode-->
      <div class="wrapper-toggle">
        <input type="checkbox" id="themeSwitch" onchange="toggleTheme()">
        <i class="fa-solid fa-sun" style="color: #ffdf0f;"></i>
        <i class="fa-solid fa-moon" style="color: #0050db;"></i>
    </div>
    <!--/switch light-dark mode-->
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

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
</body>

</html>
