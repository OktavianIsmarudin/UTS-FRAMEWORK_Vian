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
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}"
                            class="nav-link">barang List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger
alert-dismissible fade show">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kode" id="kode" value=""
                                placeholder="Enter Kode">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="nama" id="kode" value=""
                                placeholder="Enter nama">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga Barang</label>
                            <input class="form-control" type="text" name="harga" idhargail" value=""
                                placeholder="Enter harga">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsi" id="deskripsi" value=""
                                placeholder="Enter deskripsi">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="formlabel">Satuan</label>
                            <select name="satuan" id="satuan" class="formselect">
                                @foreach ($satuan as $satuan)
                                    <option value="{{ $satuan->id }}"
                                        {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->kode . ' - ' . $satuan->nama }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle
me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
