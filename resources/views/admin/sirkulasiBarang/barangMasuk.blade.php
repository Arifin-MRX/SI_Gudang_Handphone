@extends('admin.master')
@section('content')
    <div class="container">
        <div class="tb-gudang  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA BARANG MASUK</h3>
                <p>Cari Data Barang:</p>
                <form class="d-flex" action="/pegawai/cari" method="GET">
                    <input class=" form-control" type="text" name="cari" placeholder="Cari Barang .."
                        value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-outline-primary mx-2">
                </form>
                {{-- <a href="#" class="btn btn-primary  mb-4 mt-4">+ Tambah Data Gudang </a> --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-bag-plus-fill"></i> Tambah Stok Barang
                </button>
                <button type="button" class="btn btn-outline-danger">
                    <i class="bi bi-filetype-pdf"></i>
                    Export PDF
                </button>
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Gudang</th>
                                {{-- <th scope="col">Stok Awal</th>
                                <th scope="col">Stok Masuk</th>
                                <th scope="col">Stok Keluar</th> --}}
                                <th scope="col">Jumlah Stok</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>OPPO</td>
                                <td>1000000</td>
                                <td>pcs</td>
                                <td>OPPO</td>
                                <td>tes</td>
                                {{-- <td>20</td>
                                <td>20</td>
                                <td>10</td> --}}
                                <td>10</td>
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
    <!-- Modal start-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Gudang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Masukkan Nama Gudang</label>
                        {{-- <input type="text" class="form-control" id="nama"> --}}
                        <select id="selectProv" class="form-select" aria-label="Default select example">

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Masukkan Alamat Gudang</label>
                        <input type="text" class="form-control" id="alamat">
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
@endsection
