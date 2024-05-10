<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Vue</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">



    @vite('resources/js/app.js')

</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand py-5" href="{{ url('/') }}">Laravel Vue SPA</a>
        </div>
        </div>
      </nav>
    <!-- navbar end -->

    <!-- main content start -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div id="app">
                    <Layout/>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end -->

    {{-- <h1 style="color: rgb(255, 174, 0)">Test Text</h1> --}}

    <!-- bootstrap -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
