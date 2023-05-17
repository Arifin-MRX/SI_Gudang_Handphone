@extends('admin.master')
@section('content')
    <div class="container">
        <div class="tb-Truk  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA TRUK</h3>
                <p>Cari Data Truk:</p>
                <form class="d-flex" action="/pegawai/cari" method="GET">
                    <input class=" form-control" type="text" name="cari" placeholder="Cari Truk .."
                        value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-primary">
                </form>
                <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah Data Truk
                </button>

                <!-- Modal start-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Truk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Masukkan Jenis Truk</label>
                                        <input type="text" class="form-control" id="jenis">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Masukkan Plat Truk</label>
                                        <input type="text" class="form-control" id="plat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Masukkan Kapasitas Truk</label>
                                        <input type="text" class="form-control" id="kapasitas">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis Truk</th>
                                <th scope="col">Nomor Plat</th>
                                <th scope="col">Kapasitas </th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tronton Wingbox</td>
                                <td>BG 1989 AD</td>
                                <td>18.000 kg</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning">
                                        <a class="text-decoration-none text-black" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger">
                                        <a class="text-decoration-none text-black" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
