<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />,
  </head>
  <body>
    <div id='outer'>
        <div id='inner'>
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
        </div>
        <!-- Carousel -->
    <div class="container">
        <div id="carouselExample" class="carousel-slide mt-5">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('assets/image/img1.jpg')}}" class="d-block" alt="Sepatu Nike Sport">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/image/img2.jpg')}}" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{asset('assets/image/img3.jpg')}" class="d-block" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
    <!-- Carousel -->
    </div>