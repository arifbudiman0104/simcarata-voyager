<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">



</head>





<body>

    @include('component.navbar')



    {{-- carousel --}}
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($data as $item)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ Voyager::image($item->image) }}" alt="First slide">
                </div>

                <div class="carousel-item">
                <img class="d-block w-100" src="https://www.umy.ac.id/wp-content/uploads/2021/02/03-Web-Header.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.umy.ac.id/wp-content/uploads/2021/02/03-Web-Header.jpg"
                    alt="Third slide">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}

    {{-- berita --}}
    <div>
        <div class="container-lg">
            <h1>Berita</h1>
        </div>



        @foreach ($data as $item)
            {{-- <li>
                <h2>

                    {{ $item->title }}
                </h2>
                
                <img src="{{ Voyager::image( $item->image ) }}" alt="">
            </li>

            {!! $item->body !!} --}}


            <div class="card" style="width: max;">
                <img src="{{ Voyager::image($item->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" {{ $item->title }}</h5>
                        <p class="card-text">{!! $item->body !!}</p>
                        <a href="/detail/{{ $item->id }}" class="btn btn-primary">Baca Artikel</a>
                </div>
            </div>

            {{-- {!! $item->body !!} --}}

        @endforeach
    </div>

    {{-- footer --}}
    <div id="footer">
        <footer class="bg-light text-center text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">ALAMAT</h5>
                        <p>
                            Pondok Pesantren Tahfidzil Qur'an Muhammadiyah Ibnu Juraimi Yogyakarta Kricak,
                            Kec.Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55242
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">HUBUNGI KAMI</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-dark">Telp : (0274) 5014307</a>
                            </li>
                            <li>
                                <a class="text-dark">Email : pcmtegalrejo@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">SOSIAL MEDIA</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.facebook.com" target="_blank" class="text-dark">Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com" target="_blank" class="text-dark">Instagram</a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com" target="_blank" class="text-dark">Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                ©2021 Pimpinan Cabang Muhammadiyah Tegalrejo . Dikembangkan oleh Mahasiswa Universitas Muhammadiyah
                Yogyakarta
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross origin="anonymous">



    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>




</html>
