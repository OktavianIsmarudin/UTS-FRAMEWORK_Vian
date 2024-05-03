<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>document</title>
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
    <div class="container-sm my-5 ">
        <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="code" class="formlabel">Kode Barang</label>
                            <input class="form-control
            @error('code') is-invalid @enderror" type="text"
                                name="code"id="code"
                                value="{{ $errors->any() ? old('code') : $barang->kodeBarang }}"
                                placeholder="Enter Kode Barang">
                            @error('code')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama Barang</label>
                            <input class="form-control @error('name')is-invalid @enderror" type="text"
                                name="name" id="name"
                                value="{{ $errors->any() ? old('name') : $barang->namaBarang }}"
                                placeholder="Enter Nama Barang">
                            @error('name')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="formlabel">Harga</label>
                            <input class="form-control @error('harga')is-invalid @enderror" type="text" name="harga"
                                id="harga" value="{{ $errors->any() ? old('harga') : $barang->hargaBarang }}"
                                placeholder="Enter Harga">
                            @error('harga')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="formlabel">Deskripsi</label>
                            <input class="form-control @error('deskripsi') isinvalid @enderror" type="text" name="deskripsi"
                                id="deskripsi" value="{{ $errors->any() ? old('deskripsi') : $barang->deskripsiBarang }}"
                                placeholder="Enter Deskripsi">
                            @error('deskripsi')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
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
                                    class="bi-arrow-left-circleme-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark
            btn-lg mt-3"><i
                                    class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
