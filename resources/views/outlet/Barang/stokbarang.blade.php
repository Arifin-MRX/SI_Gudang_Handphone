@extends('outlet.master')
@section('content')
    <div class="container">
        <div class="tb-gudang  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA BARANG</h3>
                <p>Cari Data Barang:</p>
                <form class="d-flex" action="/pegawai/cari" method="GET">
                    <input class=" form-control" type="text" name="cari" placeholder="Cari Barang .."
                        value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-outline-primary mx-2">
                </form>
                {{-- <a href="#" class="btn btn-primary  mb-4 mt-4">+ Tambah Data Gudang </a> --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary my-4"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-bag-plus-fill"></i> 
                    <a href="/outlet/dashboard" class="text-decoration-none">
                        Pesan Barang
                    </a>
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
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
