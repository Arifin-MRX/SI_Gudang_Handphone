@extends('outlet.master')
@section('content')
    <div class="container">
        <div class="dashboard">
            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end ">
                <h6>
                    Selamat Datang {{ Auth::user()->nama_pengguna }}
                </h6>
            </div>
            <form action="#" class="d-flex m-2 mt-4 justify-content-end" >
                {{-- Lacak pengiriman --}}
                <div class="d-flex ">
                    <input type="text" class="form-control" placeholder="Lacak Pengiriman...">
                    <button type="submit" class="btn btn-outline-primary mx-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Cari
                    </button>
                </div>
            </form>
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
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="steeper">
                        <div class="container mt-3">
                            <div
                                class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between mt-3 padding-bottom-1x">
                                <div class="step completed d-block w-100 text-center mb-4">
                                    <div class="step-icon-wrap d-block position-relative w-100 text-center">
                                        <div class="step-icon d-inline-block position-relative">
                                            <i class="fa-solid fa-address-card"></i>
                                        </div>
                                    </div>
                                    <h4 class="step-title mt-3 mb-0">
                                        1. Contact details
                                    </h4>
                                </div>
                                <div class="step completed d-block w-100 text-center mb-4">
                                    <div class="step-icon-wrap d-block position-relative w-100 text-center">
                                        <div class="step-icon d-inline-block position-relative">
                                            <i class="fa-solid fa-truck-fast"></i>
                                        </div>
                                    </div>
                                    <h4 class="step-title mt-3 mb-0">
                                        2. Shipping method
                                    </h4>
                                </div>
                                <div class="step d-block w-100 text-center mb-4">
                                    <div class="step-icon-wrap d-block position-relative w-100 text-center">
                                        <div class="step-icon d-inline-block position-relative">
                                            <i class="step.icon"></i>
                                            <i class="fa-solid fa-credit-card text-secondary"></i>
                                        </div>
                                    </div>
                                    <h4 class="step-title mt-3 mb-0">
                                        3. Payment
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal end --}}
@endsection
