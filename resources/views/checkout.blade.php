<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Syopping GO | Detail Product</title>
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>Syopping GO</strong></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto">
                  <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Cari">
                  <button class="btn btn-light" type="submit">Cari</button>
                </form>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/product">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Akun</a>
                  </li>
                </ul>
                <div class="d-flex gap-4 align-items-center">
                  <button class="btn btn-warning" type="button">Login | Register</button>
                  <i class="fa-solid fa-bag-shopping"></i>
                </div>
              </div>
            </div>
          </nav>
    </head>

    <!-- Isi Artikel -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 mb-2">
                <a href="/" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3><i class="fa fa-shopping-cart"></i>Check Out</h3>
                </div>
            </div>

            {{-- <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i>Check Out</h3>
                        <p align="right">Tanggal Pesan : 2023-12-14</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="container bg-light">
        <form action="">
            @csrf
        <div class="row">
            <div class="col-md-8 py-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h5>Isi Data pembelian</h5>
                    </div>
                    <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-6">
                                    <input name="customer_name" type="text" class="form-control" id="" placeholder="Masukan nama lengkap">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input name="customer_email" type="email" class="form-control" id="" placeholder="Masukan email yang aktif">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">No HP</label>
                                <div class="col-sm-6">
                                    <input name="customer_phone" type="text" class="form-control" id="" placeholder="Masukan no wa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-6">
                                    <input name="customer_address" type="text" class="form-control" id="" placeholder="Masukan alamat lengkap">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Upload bukti bayar</label>
                                <div class="col-sm-6">
                                    <input name="payment_proof" type="file" class="form-control" id="" placeholder="Masukan alamat lengkap">
                                </div>
                            </div>
                            <input type="hidden" name="id_product" value="{{$product->id}}">
                            <button type="submit" class="btn btn-primary mt-3">Confirmed Order</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-5">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark text-white"><h6>Rincian Pesanan</h6></li>
                            <li class="list-group-item">
                                <img src="/storage/{{$product->image_product}}" class="card-img-top" alt="" style="width: 100px;">
                                <p><br><strong>{{$product->name_product}}</strong></p>
                                <p>{{$product->detail_product}}</p>
                                <p>Qty : <input type="number" name="quantity_product"></p>
                            </li>
                            <li class="list-group-item">
                                <p>Harga : Rp. {{$product->price_product}}</p>
                                <p><strong>Total Harga : Rp. </strong></p>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Isi Artikel -->

    {{-- <p align="right">Tanggal Pesan : 2023-12-14</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Jam Tangan Casio Origina</td>
                <td>1</td>
                <td>Rp. 5.500.000</td>
                <td>Rp. 5.500.000</td>
                <td>
                    <form action="" method="post">
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="right"><strong>Total Harga</strong></td>
                <td><strong>Rp. 5.500.000</strong></td>
                <td>
                    <a href="" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Check Out</a>
                </td>
            </tr>
        </tbody>
    </table>
     --}}

    <br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VfvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>