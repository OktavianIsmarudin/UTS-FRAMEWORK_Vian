<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                            class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}"
                            class="nav-link">barang List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h4>Laravel UTS - Master Barang</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light
rounded-3 border">
<div class="card" style="width: 18rem;">

    <div class="card-body"><img src="{{ Vite::asset('resources/images/profile.jpg') }}"" alt="">

      <p class="card-text">Oktavian Ismarudian - 1204220143</p>
    </div>
  </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>

