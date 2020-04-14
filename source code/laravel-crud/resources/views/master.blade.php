<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title> @yield('title') </title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2> @yield('judul_halaman') </h2>
                    </div>
                    <div class="card-body">
                        @yield('konten')
                    </div>
                <div class="card">
            </div>
        </div>
    </div>
</body>
</html>