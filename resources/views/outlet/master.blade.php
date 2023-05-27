<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    {{-- icons --}}
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- select --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    {{-- sidebar --}}
    <div class="container-fluid bg-dark sidebar ">
        <div class="row flex-nowrap ">
            <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between ">
                <div class="bg-dark p-2 mb-5 ml-3 flex-1 m-auto mt-0">
                    <a class="d-flex text-decoration-none m-1 align-items-center " href="#">
                        <img src="{{ asset('assets/Gudang-3.png') }}" alt="LogoGudang" width="190px">
                    </a>
                    <ul class="nav nav-pills flex-column mt-5">
                        <li class="nav-item py-2 py-sm-0  ">
                            <a href="/outlet/dashboard" class="nav-link text-white">
                                <i class="fa-solid fa-house fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline ">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0  ">
                            <a href="/outlet/stokbarang" class="nav-link text-white">
                                <i class="bi bi-box-seam-fill"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline ">
                                    Stok Barang
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/outlet/pemesanan" class="nav-link text-white">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Pemesanan
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/outlet/penerimaanbarang" class="nav-link text-white">
                                <i class="fa-solid fa-handshake fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Penerima Barang
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="#" class="nav-link text-white">
                                <i class="bi bi-truck"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Pengiriman
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- navbar --}}
    <nav class="navbar bg-body-tertiary position-fixed ">
        <div class="container-fluid">
            <a class="navbar-brand"> </a>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle pr-4" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->nama_pengguna }}
                </a>
                <ul class="dropdown-menu p-4 ">
                    <li><a class="dropdown-item rounded" href="#"><i class="fa-solid fa-user m-2"></i>
                            Profil</a></li>
                    <li><a class="dropdown-item rounded" href="#"><i class="fa-solid fa-right-from-bracket"></i>
                            Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- konten --}}
    <div class="content">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- javascript select --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- link jax  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#selectProv").select2({
                placeholder: "Pilih Provinsi",
                // allowClear: true
            });
        });
    </script>
</body>

</html>
