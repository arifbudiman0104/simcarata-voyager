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


    {{-- @extends('welcome') --}}
 
    <!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
    @section('title')
    {{ $data->title }}
    @endsection
     
    <!-- menampilkan gambar, judul, dan isi artikel -->
    @section('main')
    <div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
        <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" >
        <div class="p-4">
            <h2>{{ $data->title }}</h2>
            <p class="mt-5">{{ $data->body }}</p>
        </div>
    </div>
    @endsection
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
     
    <!-- menampilkan tombol kembali ke halaman utama -->
    @section('sidebar')
    <div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
       <center> 
            <a href="/"> 
                <button class="btn btn-info text-white w-100">Kembali</button> 
            </a>
        </center>
    </div>
    @endsection
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
