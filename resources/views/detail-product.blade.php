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
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <img src="/storage/{{$product->image_product}}" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h1>{{$product->name_product}}</h1>
                    <p class="fs-5">{{$product->detail_product}}</p>
                    <p class="" style="color: rgb(34, 187, 14)">Harga: {{$product->price_product}}</p>
                    <p class="fs-5">Status Ketersediaan: 
                      @if ($product->stock_product===0)
                        <strong>Tidak Tersedia</strong>
                      @else
                        <strong>Tersedia</strong>
                      @endif
                    </p>
                    <br><a href="/checkout/{{$product->id}}" class="btn btn-danger btn-sm">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Isi Artikel -->

    

    <br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VfvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>