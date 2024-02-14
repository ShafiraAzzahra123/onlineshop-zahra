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
        <title>Syopping GO | Product</title>
    </head>
    <body>
        <header>
            @include('layouts.header');
        </header>
        <!-- isi artikel -->
        <main class="container py-5">
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <ul class="list-group">
                            <h3>Kategori</h3>
                            <li class="list-group-item">Baju Wanita</li>
                            <li class="list-group-item">Baju Pria</li>
                            <li class="list-group-item">Jaket</li>
                            <li class="list-group-item">Sepatu</li>
                            <li class="list-group-item">Aksesoris Fashion</li>
                          </ul>
                    </div>
                    <div class="col-lg-9">
                        <h3 class="text-center mb-4">Produk</h3>
                        <div class="row">
                            @foreach ($category->products as $item)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="image-box">
                                        <img src="/storage/{{$item->image_product}}" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">{{$item->name_product}}</h5>
                                      <p class="card-text">Rp{{$item->price_product}}</p>
                                      <a href="/detail-product/{{$item->id}}" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                            </div> 
                            @endforeach
                        </div>
                    </div>
                </div>
        </main>
        <!-- isi artikel -->

        <!-- Footer -->
        <main>
            @include('layouts.footer');
        </main>
        <!-- Footer -->

        <br>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VfvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>