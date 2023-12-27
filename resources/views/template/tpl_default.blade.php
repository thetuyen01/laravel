<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
</head>

<body id={{ $page }}>
    @include('includes.header')
    <h2>Tiêu đề từ tempalte</h2>

    @yield('content')

    @include('includes.footer')

    @yield('js')
</body>


</html>
