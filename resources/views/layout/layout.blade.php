<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href={{ asset('styles/app.css') }}>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction</title>
</head>

<body>
    <x-pagemessage/>
    @include('./partials/nav')

    <main>
        @yield('content')
    </main>

    @include('./partials/footer')
</body>

</html>
