@extends('pegawai.master')
@section('content')
    <div class="container">
        <div class="dashboard">
            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end ">
                <h6>
                    Selamat Datang {{ Auth::user()->nama_pengguna }}
                </h6>
            </div>
            <div class="row   flex-wrap mt-4 ">
                <div class="col-md-6 col-lg-3 m-4  ">
                    <div class="border border-primary p-3 bg-primary bg-opacity-10 rounded shadow-lg ">
                        <h3 class="text-primary">
                            Sudah diterima
                        </h3>
                        <div class="icon">
                            <p class="fs-1 ">
                                <span class="p-3">100</span><i class="bi bi-bag-check-fill "
                                    style="color: #89919f;"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 m-4  ">
                    <div class="border border-primary p-3 bg-primary bg-opacity-10 rounded shadow-lg ">
                        <h3 class="text-primary">
                            Belum diterima
                        </h3>
                        <div class="icon">
                            <p class="fs-1 ">
                                <span class="p-3">100</span><i class="bi bi-bag-x-fill "
                                    style="color: #89919f;"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 m-4  ">
                    <div class="border border-primary p-3 bg-primary bg-opacity-10 rounded shadow-lg ">
                        <h3 class="text-primary">
                            Pesanan
                        </h3>
                        <div class="icon">
                            <p class="fs-1 ">
                                <span class="p-3">100</span><i class="bi bi-cart-fill "
                                    style="color: #89919f;"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 m-4  ">
                    <div class="border border-primary p-3 bg-primary bg-opacity-10 rounded shadow-lg ">
                        <h3 class="text-primary">
                            Gudang
                        </h3>
                        <div class="icon">
                            <p class="fs-1 ">
                                <span class="p-3">100</span><i class="fa-solid fa-shop align-self-end "
                                    style="color: #89919f;"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 m-4  ">
                    <div class="border border-primary p-3 bg-primary bg-opacity-10 rounded shadow-lg ">
                        <h3 class="text-primary">
                            Barang Masuk
                        </h3>
                        <div class="icon">
                            <p class="fs-1 ">
                                <span class="p-3">100</span><i class="fa-solid fa-calendar-plus align-self-end "
                                    style="color: #89919f;"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 m-4  ">
                    <div class="border border-primary p-3 bg-primary bg-opacity-10 rounded shadow-lg ">
                        <h3 class="text-primary">
                            Barang Keluar
                        </h3>
                        <div class="icon">
                            <p class="fs-1 ">
                                <span class="p-3">100</span><i class="fa-solid fa-calendar-minus align-self-end "
                                    style="color: #89919f;"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
