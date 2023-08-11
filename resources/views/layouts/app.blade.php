<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5.2.3</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    @include('layouts.partials.menu')
    <div class="container">
        @include('layouts.partials.flash-messages')
        <div>
            @yield('content')
        </div>
    </div>
    @include('layouts.partials.footer')

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"
        integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
</body>

</html>
