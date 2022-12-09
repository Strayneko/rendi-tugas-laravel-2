<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
</head>

<body>
    {{-- navbar components --}}
    <x-navbar />
    {{-- end of navbar components --}}

    <main class="container mt-4">
        @yield('content')
    </main>
    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.min.js') }}"></script>

    {{-- custom javascript --}}
    <script>
        const name = document.querySelector('#name');
        const description = document.querySelector('#description')
        const counterName = document.querySelector('#name_count #count');
        const counterDesc = document.querySelector('#desc_count #count')
        counterName.innerHTML = name.value.length
        counterDesc.innerHTML = description.value.length


        name.addEventListener('keydown', () => {
            counterName.innerHTML = name.value.length
            if (name.value.length >= 255) {
                name.value = name.value.slice(0, 254);
            }
        })
        description.addEventListener('keydown', () => {
            counterDesc.innerHTML = description.value.length
        })
    </script>
</body>

</html>
