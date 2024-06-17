<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h2>Tambah Produk</h2>
  <h5>.</h5>
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UTS Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/produk">Produk</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <form action="" method="GET">
    <div class="row">
      <h2>Form Tambah Produk</h2>
        <div class="col-sm-4">
          <label for="">Kode Produk</label>
          <input type="text" name="Kode_Produk" class="form-control" placeholder="Input Kode Produk">
        </div>
        <div class="col-sm-4">
          <label for="">Nama Produk</label>
          <input type="text" name="Nama_Produk" class="form-control" placeholder="Input Nama Produk">
        </div>
        <div class="col-sm-4">
          <label for="">Jenis Produk</label>
          <select name="Jenis_Produk" class="form-control">
            @for ($i = 0; $i < $jumlahproduk; $i++)
              <option value="{{ $jenisProduk[$i] }}">{{ $jenisProduk[$i] }}</option>
            @endfor
          </select>
        </div>
        <div class="col-sm-6">
          <label for="">Harga</label>
          <input type="text" name="Harga" class="form-control" placeholder="Input Harga">
        </div>
        <div class="col-sm-6">
          <div class="row mt-4">
            <div class="col-sm-12">
              <div class="form-group">
                <button class="btn btn-success " type="submit" style="width: 100%">Simpan</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>