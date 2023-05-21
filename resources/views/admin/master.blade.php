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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

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
                            <a href="/admin/dashboard" class="nav-link text-white">
                                <i class="fa-solid fa-house fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline ">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/gudang" class="nav-link text-white">
                                <i class="fa-solid fa-shop fa-beat" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Gudang
                                </span>
                            </a>
                        </li>
                        {{-- Pengguna start --}}
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="#" class="nav-link text-white dropdown-toggle" ole="button"
                                data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="fa-solid fa-user fa-beat" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Pengguna
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/admin/pegawai">
                                        <i class="fa-solid fa-user fa-beat"></i>
                                        <span class="fs-6 ms-3 d-none d-sm-inline">
                                            Data Pegawai
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/admin/outlet">
                                        <i class="fa-sharp fa-solid fa-store fa-beat-fade"></i>
                                        <span>
                                            Data Outlet
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/admin/Datasupir">
                                        <i class="fa-solid fa-user-nurse fa-beat"></i>
                                        <span class="fs-6 ms-3 d-none d-sm-inline">
                                            Data Supir
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/admin/hakAkses">
                                        <i class="bi bi-person-bounding-box"></i>
                                        <span class="fs-6 ms-3 d-none d-sm-inline">
                                            Hak Akses
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- pengguna end --}}
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="#" class="nav-link text-white dropdown-toggle" ole="button"
                                data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="fa-brands fa-dropbox fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Laporan Barang
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/admin/Databarang">
                                        <i class="bi bi-journal-bookmark-fill"></i>
                                        <span>
                                            Data Barang
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('barangMasuk') }}">
                                        <i class="bi bi-journal-plus"></i>
                                        <span>
                                            Barang Masuk
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('barangKeluar') }}">
                                        <i class="bi bi-journal-minus"></i>
                                        <span>
                                            Barang Keluar
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/admin/kategori">
                                        <i class="bi bi-journal-text"></i>
                                        Tambah Kategori
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/pemesanan" class="nav-link text-white">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Pemesanan
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/penerimaanbarang" class="nav-link text-white">
                                <i class="fa-solid fa-handshake fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Penerima Barang
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/pengiriman" class="nav-link text-white">
                                <i class="fa-solid fa-share-from-square fa-beat-fade" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Pengirim
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/jadwalpengiriman" class="nav-link text-white">
                                <i class="fa-solid fa-calendar-days fa-beat-fade" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Jadwal Pengirim
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/truk" class="nav-link text-white">
                                <i class="fa-solid fa-truck fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Truk
                                </span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/admin/rute" class="nav-link text-white">
                                <i class="fa-solid fa-location-dot fa-bounce" style="color: #ffffff;"></i>
                                <span class="fs-6 ms-3 d-none d-sm-inline">
                                    Rute
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
                    Moh Harifin
                </a>
                <ul class="dropdown-menu p-4 ">
                    <li><a class="dropdown-item rounded" href="#"><i class="fa-solid fa-user m-2"></i>
                            Profil</a></li>
                    <li><a class="dropdown-item rounded" href="#"><i
                                class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
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
    {{-- <script>
        $('#modal2').on('show.bs.modal', function() {
            setTimeout(function() {
                $('#modal1').css('z-index', 1);
                $('#modal2').css('z-index', 2);
            }, 500);
        });

        $('#modal2').on('hidden.bs.modal', function() {
            $('#modal1').css('z-index', 2);
            $('#modal2').css('z-index', 1);
        });
    </script> --}}

    {{-- javascript select --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js
    "></script>
    


    {{-- link jax  --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

</body>

</html>
