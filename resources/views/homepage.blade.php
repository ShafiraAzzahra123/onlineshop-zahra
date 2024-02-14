<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Syopping GO | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<!-- Kategori -->
  <div class="container-fluid py-5">
    <div class="container text-center bg-light p-5 m-5" >
      <style>
        h3{
          font-family: 'Tahoma';
        }
      </style>
      <h3>Kategori</h3>
      <div class="row mt-5">
        @foreach ($categories as $item)
        <div class="col-4 mt-2">
          <div class="highlighted-kategori" >
            <div style="background: linear-gradient(rgba(0,0,0,) rgba(0,0,0,))">
              <img src="/storage/{{$item->image}}" alt="..." height="250px;" >
            </div>
            <b><a href="/category/{{$item->address}}">{{$item->name}}</a></b>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
<!-- Kategori -->

<!-- footer -->
  <footer class="" style="background-color: #FFB534">
    <div class="container">
      <div class="d-flex gap-5 pt-4">
        <div class="title-left w-70">
          <div class="header-title">
            <style>
              h5{
                font-family: 'Sans-serif';
                font-size: 21px;
              }
            </style>
            <h5><u>Toko Kita</u></h5>
          </div>
          <style>
            p{
              font-family: 'Lucida-sans';
              font-size: 18px;
            }
          </style>
          <p><b>Syopping GO</b> merupakan badan usaha yang bergerak dibidang fashion. Berdiri dari tahun 2022,saat ini <b>Syopping GO</b> sudah memiliki beberapa item pilihan yang tentunya digemari oleh kalangan remaja khususnya kaum wanita.</p>
        </div>
        <div class="title-middle w-30">
          <div class="header-title">
            <h5><u>Tentang Kami</u></h5>
          </div>
          <ul>
            <style>
              li{
                font-family: 'Lucida-sans';
                font-size: 16px;
              }
            </style>
            <li>
              <p>
                Jl. Pesona Tirtoadi, Rajeg, jetis, Kec. Mlati, Daerah Istimewa Yogyakarta.
              <p>
            </li>
            <li>
              <p>08886533911</p>
            </li>
            <li>
              <p>@syopping_go</p>
            </li>
          </ul>
        </div>
        <div class="title-right w-50">
          <div class="header-title">
            <h5><u>Sosial Media</u></h5>
          </div>
          <div class="sosmed">
            <i class="fa fa-instagram mt-5">
              <img src="{{asset('assets/image/instagram.png')}}" alt="">
            </i>
            <i class="fa fa-facebook mt-5">
              <img src="{{asset('assets/image/linkedin.png')}}" alt="">
            </i>
            <span class="fa-stack">
              <i class="fa fa-square fa-stack-5x"></i>
              <i class="fa-brands fa-square-twitter fa-stack-1x fa-inverse"></i>
            </span>
            {{-- <i class="fa-brands fa-square-twitter"></i> --}}
            {{-- <span class="fa-stack fa-2x" style="--fa-inverse: #1da1f2;">
              <i class="fa-solid fa-square fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
            </span> --}}
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <br>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VfvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>


<!-- Footer -->
{{-- <div class="row">
        <div class="col-md-6">
          <span class="">Copyright @2024 | Create and Developed by <a href="#" class="text-decoration-none text-dark fw-bold">Shafira Azzahra</a></span>
        </div>
        <div class="col-md-6 text-end">
          <a href="" class="instagram text-decoration-none">
            <img src="{{asset('assets/image/instagram.png')}}" alt="" class="ms-2" style="width: 30px;">
          </a>
          <a href="" class="facebook text-decoration-none">
            <img src="{{asset('assets/image/facebook.png')}}" alt="" class="ms-2" style="width: 30px;">
          </a>
          <a href="" class="twitter text-decoration-none">
            <img src="{{asset('assets/image/twitter.png')}}" alt="" class="ms-2" style="width: 30px;">
          </a>
        </div>
      </div> --}}
<!-- Footer -->

      <!-- Navbar -->
      {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
      </nav> --}}
      <!-- Navbar -->
