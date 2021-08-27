<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        .main{
            padding: 3rem;
        }
        @yield('css')
    </style>

    <title>@yield('title')</title>
</head>
<body>

@include('navigation')

<div class="main">
    <div class="container">
        <div class="row">

            <div class="col-9">
                @yield('content')
            </div>
            <div class="col-3">
                @include('catagory')

            </div>

        </div>
    </div>
</div>

@include('footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
