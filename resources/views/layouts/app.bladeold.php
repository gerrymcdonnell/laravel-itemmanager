<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel app</title>

        <!-- add app css file (auto looks in public folder) -->
        <link rel="stylesheet" href="/css/app.css">


    </head>

    <body>

@include('inc.navbar')

    <div class="container">

    @include('inc.messages')

        <div class="row">

            <div class="col-md-8 col-lg-8">
                <!-- content goes here -->
                @yield('content')
            </div>

            <div class="col-md-4 col-lg-4">

            </div>
        </div>

    </div>

    <footer id="footer" class="text-center">
        <p>Copyright &copy 2018</p>
    </footer>

    </body>


</html>